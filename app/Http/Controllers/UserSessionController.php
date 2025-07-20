<?php

namespace App\Http\Controllers;

use App\Models\UserSession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

/**
 * @OA\Tag(name="User Sessions", description="Endpoints para gerenciamento de sessões de usuários")
 */
class UserSessionController extends Controller
{
    /**
     * @OA\Get(
     *     path="/v1/user-sessions",
     *     summary="Listar todas as sessões de usuários",
     *     tags={"User Sessions"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Lista de sessões"),
     *     @OA\Response(response=401, description="Não autorizado")
     * )
     */
    public function index()
    {
        $sessions = UserSession::with('user')->get();
        return response()->json([
            'status' => 'success',
            'data' => $sessions,
            'count' => $sessions->count(),
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/v1/user-sessions",
     *     summary="Criar uma nova sessão de usuário",
     *     tags={"User Sessions"},
     *     security={{"sanctum": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"user_id", "session_token", "expires_at"},
     *             @OA\Property(property="user_id", type="integer", example=1),
     *             @OA\Property(property="session_token", type="string", example="abc123xyz"),
     *             @OA\Property(property="ip_address", type="string", example="192.168.1.1"),
     *             @OA\Property(property="user_agent", type="string", example="Mozilla/5.0"),
     *             @OA\Property(property="expires_at", type="string", format="date-time", example="2025-07-27 14:00:00")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Sessão criada"),
     *     @OA\Response(response=422, description="Erro de validação")
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'session_token' => 'required|string|unique:user_sessions,session_token|max:255',
            'ip_address' => 'nullable|ip',
            'user_agent' => 'nullable|string|max:255',
            'expires_at' => 'required|date|after:now',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $sessionData = $request->only(['user_id', 'session_token', 'ip_address', 'user_agent', 'expires_at']);
            $userSession = UserSession::create($sessionData);

            return response()->json([
                'status' => 'success',
                'message' => 'User session created successfully',
                'data' => $userSession->load('user'),
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create user session',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/v1/user-sessions/{id}",
     *     summary="Exibir uma sessão de usuário",
     *     tags={"User Sessions"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Sessão encontrada"),
     *     @OA\Response(response=404, description="Sessão não encontrada")
     * )
     */
    public function show($id)
    {
        $session = UserSession::with('user')->find($id);

        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'User session not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $session,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/v1/user-sessions/{id}",
     *     summary="Atualizar uma sessão de usuário",
     *     tags={"User Sessions"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="session_token", type="string", example="newtokenxyz"),
     *             @OA\Property(property="ip_address", type="string", example="192.168.1.2"),
     *             @OA\Property(property="user_agent", type="string", example="Mozilla/5.0"),
     *             @OA\Property(property="expires_at", type="string", format="date-time", example="2025-07-28 14:00:00"),
     *             @OA\Property(property="is_active", type="boolean", example=false)
     *         )
     *     ),
     *     @OA\Response(response=200, description="Sessão atualizada"),
     *     @OA\Response(response=404, description="Sessão não encontrada")
     * )
     */
    public function update(Request $request, $id)
    {
        $session = UserSession::find($id);

        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'User session not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'session_token' => 'sometimes|required|string|unique:user_sessions,session_token,' . $id . '|max:255',
            'ip_address' => 'nullable|ip',
            'user_agent' => 'nullable|string|max:255',
            'expires_at' => 'sometimes|required|date|after:now',
            'is_active' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $session->update($request->only(['session_token', 'ip_address', 'user_agent', 'expires_at', 'is_active']));
            return response()->json([
                'status' => 'success',
                'message' => 'User session updated successfully',
                'data' => $session->load('user'),
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update user session',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/v1/user-sessions/{id}",
     *     summary="Excluir uma sessão de usuário",
     *     tags={"User Sessions"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Sessão excluída"),
     *     @OA\Response(response=404, description="Sessão não encontrada")
     * )
     */
    public function destroy($id)
    {
        $session = UserSession::find($id);

        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'User session not found',
            ], 404);
        }

        try {
            $session->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'User session deleted successfully',
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete user session',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
