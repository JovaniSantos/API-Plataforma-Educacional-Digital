<?php

namespace App\Http\Controllers\Admin;

use App\Models\EnrollmentRequest;
use App\Models\Student;
use App\Models\Classroom; // Ajuste o nome conforme sua convenção
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

/**
 * @OA\Tag(name="Enrollment Requests", description="Endpoints para gerenciamento de solicitações de matrícula")
 */
class EnrollmentRequestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/v1/admin/enrollment-requests",
     *     summary="Listar todas as solicitações de matrícula",
     *     tags={"Enrollment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Lista de solicitações"),
     *     @OA\Response(response=401, description="Não autorizado")
     * )
     */
    public function index()
    {
        $requests = EnrollmentRequest::with(['student', 'classroom'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $requests,
            'count' => $requests->count(),
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/v1/admin/enrollment-requests",
     *     summary="Criar uma nova solicitação de matrícula",
     *     tags={"Enrollment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"student_id", "class_id", "reason"},
     *             @OA\Property(property="student_id", type="integer", example=1),
     *             @OA\Property(property="class_id", type="integer", example=1),
     *             @OA\Property(property="reason", type="string", example="Solicitação de matrícula para 1ª classe"),
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
            'student_id' => 'required|exists:students,id',
            'class_id' => 'required|exists:classes,id',
            'reason' => 'required|string',
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
            $requestData = $request->only(['student_id', 'class_id', 'reason', 'status']);
            $enrollmentRequest = EnrollmentRequest::create($requestData);

            return response()->json([
                'status' => 'success',
                'message' => 'Enrollment request created successfully',
                'data' => $enrollmentRequest->load(['student', 'classroom']),
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create enrollment request',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/v1/admin/enrollment-requests/{id}",
     *     summary="Exibir uma solicitação de matrícula",
     *     tags={"Enrollment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Solicitação encontrada"),
     *     @OA\Response(response=404, description="Solicitação não encontrada")
     * )
     */
    public function show($id)
    {
        $request = EnrollmentRequest::with(['student', 'classroom'])->find($id);

        if (!$request) {
            return response()->json([
                'status' => 'error',
                'message' => 'Enrollment request not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $request,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/v1/admin/enrollment-requests/{id}",
     *     summary="Atualizar uma solicitação de matrícula",
     *     tags={"Enrollment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", enum={"pending", "approved", "rejected"}, example="approved"),
     *             @OA\Property(property="admin_notes", type="string", example="Aprovado por documentação completa"),
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
        $enrollmentRequest = EnrollmentRequest::find($id);

        if (!$enrollmentRequest) {
            return response()->json([
                'status' => 'error',
                'message' => 'Enrollment request not found',
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
            $enrollmentRequest->update($request->only(['status', 'admin_notes', 'processed_by', 'processed_date']));
            return response()->json([
                'status' => 'success',
                'message' => 'Enrollment request updated successfully',
                'data' => $enrollmentRequest->load(['student', 'classroom']),
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update enrollment request',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/v1/admin/enrollment-requests/{id}",
     *     summary="Excluir uma solicitação de matrícula",
     *     tags={"Enrollment Requests"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Solicitação excluída"),
     *     @OA\Response(response=404, description="Solicitação não encontrada")
     * )
     */
    public function destroy($id)
    {
        $enrollmentRequest = EnrollmentRequest::find($id);

        if (!$enrollmentRequest) {
            return response()->json([
                'status' => 'error',
                'message' => 'Enrollment request not found',
            ], 404);
        }

        try {
            $enrollmentRequest->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Enrollment request deleted successfully',
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete enrollment request',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
