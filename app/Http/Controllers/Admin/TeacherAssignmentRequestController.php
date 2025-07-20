<?php

namespace App\Http\Controllers\Admin;

use App\Models\TeacherAssignmentRequest;
use App\Models\Teacher;
use App\Models\Classroom; // Ajuste o nome conforme sua convenção
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

/**
 * @OA\Tag(name="Teacher Assignment Requests", description="Endpoints para gerenciamento de solicitações de atribuição de professores")
 */
class TeacherAssignmentRequestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/v1/admin/teacher-assignment-requests",
     *     summary="Listar todas as solicitações de atribuição",
     *     tags={"Teacher Assignment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Lista de solicitações"),
     *     @OA\Response(response=401, description="Não autorizado")
     * )
     */
    public function index()
    {
        $requests = TeacherAssignmentRequest::with(['teacher', 'classroom'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $requests,
            'count' => $requests->count(),
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/v1/admin/teacher-assignment-requests",
     *     summary="Criar uma nova solicitação de atribuição",
     *     tags={"Teacher Assignment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"teacher_id", "class_id", "requested_by"},
     *             @OA\Property(property="teacher_id", type="integer", example=1),
     *             @OA\Property(property="class_id", type="integer", example=1),
     *             @OA\Property(property="requested_by", type="integer", example=1),
     *             @OA\Property(property="status", type="string", enum={"pending", "approved", "rejected"}, example="pending")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Solicitação criada"),
     *     @OA\Response(response=422, description="Erro de validação")
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'teacher_id' => 'required|exists:teachers,id',
            'class_id' => 'required|exists:classes,id',
            'requested_by' => 'required|exists:users,id',
            'status' => 'nullable|string|in:pending,approved,rejected',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $requestData = $request->only(['teacher_id', 'class_id', 'requested_by', 'status']);
            $assignmentRequest = TeacherAssignmentRequest::create($requestData);

            return response()->json([
                'status' => 'success',
                'message' => 'Assignment request created successfully',
                'data' => $assignmentRequest->load(['teacher', 'classroom']),
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create assignment request',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/v1/admin/teacher-assignment-requests/{id}",
     *     summary="Exibir uma solicitação de atribuição",
     *     tags={"Teacher Assignment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Solicitação encontrada"),
     *     @OA\Response(response=404, description="Solicitação não encontrada")
     * )
     */
    public function show($id)
    {
        $request = TeacherAssignmentRequest::with(['teacher', 'classroom'])->find($id);

        if (!$request) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assignment request not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $request,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/v1/admin/teacher-assignment-requests/{id}",
     *     summary="Atualizar uma solicitação de atribuição",
     *     tags={"Teacher Assignment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", enum={"pending", "approved", "rejected"}, example="approved"),
     *             @OA\Property(property="admin_notes", type="string", example="Aprovado por experiência"),
     *             @OA\Property(property="processed_by", type="integer", example=1),
     *             @OA\Property(property="processed_date", type="string", format="date", example="2025-07-20")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Solicitação atualizada"),
     *     @OA\Response(response=404, description="Solicitação não encontrada")
     * )
     */
    public function update(Request $request, $id)
    {
        $assignmentRequest = TeacherAssignmentRequest::find($id);

        if (!$assignmentRequest) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assignment request not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'sometimes|required|string|in:pending,approved,rejected',
            'admin_notes' => 'nullable|string',
            'processed_by' => 'nullable|exists:users,id',
            'processed_date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $assignmentRequest->update($request->only(['status', 'admin_notes', 'processed_by', 'processed_date']));
            return response()->json([
                'status' => 'success',
                'message' => 'Assignment request updated successfully',
                'data' => $assignmentRequest->load(['teacher', 'classroom']),
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update assignment request',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/v1/admin/teacher-assignment-requests/{id}",
     *     summary="Excluir uma solicitação de atribuição",
     *     tags={"Teacher Assignment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Solicitação excluída"),
     *     @OA\Response(response=404, description="Solicitação não encontrada")
     * )
     */
    public function destroy($id)
    {
        $assignmentRequest = TeacherAssignmentRequest::find($id);

        if (!$assignmentRequest) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assignment request not found',
            ], 404);
        }

        try {
            $assignmentRequest->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Assignment request deleted successfully',
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete assignment request',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
