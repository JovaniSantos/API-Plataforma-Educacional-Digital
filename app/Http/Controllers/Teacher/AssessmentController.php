<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Assessment;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Classroom; // Ajuste o nome conforme sua convenção
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

/**
 * @OA\Tag(name="Assessments", description="Endpoints para gerenciamento de avaliações")
 */
class AssessmentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/v1/teacher/assessments",
     *     summary="Listar todas as avaliações",
     *     tags={"Assessments"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Lista de avaliações"),
     *     @OA\Response(response=401, description="Não autorizado")
     * )
     */
    public function index()
    {
        $assessments = Assessment::with(['teacher', 'subject', 'classroom'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $assessments,
            'count' => $assessments->count(),
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/v1/teacher/assessments",
     *     summary="Criar uma nova avaliação",
     *     tags={"Assessments"},
     *     security={{"sanctum": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"title", "type", "teacher_id", "total_points"},
     *             @OA\Property(property="title", type="string", example="Prova de Matemática"),
     *             @OA\Property(property="type", type="string", enum={"quiz", "exam", "assignment", "project", "presentation"}, example="exam"),
     *             @OA\Property(property="subject_id", type="integer", example=1),
     *             @OA\Property(property="class_id", type="integer", example=1),
     *             @OA\Property(property="teacher_id", type="integer", example=1),
     *             @OA\Property(property="total_points", type="number", format="float", example=100.00),
     *             @OA\Property(property="weight", type="number", format="float", example=1.0),
     *             @OA\Property(property="due_date", type="string", format="date-time", example="2025-07-27 14:00:00"),
     *             @OA\Property(property="available_from", type="string", format="date-time", example="2025-07-20 09:00:00"),
     *             @OA\Property(property="time_limit", type="integer", example=60),
     *             @OA\Property(property="attempts_allowed", type="integer", example=1),
     *             @OA\Property(property="is_published", type="boolean", example=false)
     *         )
     *     ),
     *     @OA\Response(response=201, description="Avaliação criada"),
     *     @OA\Response(response=422, description="Erro de validação")
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:quiz,exam,assignment,project,presentation',
            'subject_id' => 'nullable|exists:subjects,id',
            'class_id' => 'nullable|exists:classes,id',
            'teacher_id' => 'required|exists:teachers,id',
            'total_points' => 'required|numeric|min:0',
            'weight' => 'nullable|numeric|min:0|max:1',
            'due_date' => 'nullable|date',
            'available_from' => 'nullable|date',
            'time_limit' => 'nullable|integer|min:0',
            'attempts_allowed' => 'nullable|integer|min:1',
            'is_published' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $assessment = Assessment::create($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Assessment created successfully',
                'data' => $assessment->load(['teacher', 'subject', 'classroom']),
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create assessment',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/v1/teacher/assessments/{id}",
     *     summary="Exibir uma avaliação",
     *     tags={"Assessments"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Avaliação encontrada"),
     *     @OA\Response(response=404, description="Avaliação não encontrada")
     * )
     */
    public function show($id)
    {
        $assessment = Assessment::with(['teacher', 'subject', 'classroom'])->find($id);

        if (!$assessment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assessment not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $assessment,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/v1/teacher/assessments/{id}",
     *     summary="Atualizar uma avaliação",
     *     tags={"Assessments"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="title", type="string", example="Prova de Matemática"),
     *             @OA\Property(property="type", type="string", enum={"quiz", "exam", "assignment", "project", "presentation"}, example="exam"),
     *             @OA\Property(property="subject_id", type="integer", example=1),
     *             @OA\Property(property="class_id", type="integer", example=1),
     *             @OA\Property(property="total_points", type="number", format="float", example=100.00),
     *             @OA\Property(property="weight", type="number", format="float", example=1.0),
     *             @OA\Property(property="due_date", type="string", format="date-time", example="2025-07-27 14:00:00"),
     *             @OA\Property(property="is_published", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response=200, description="Avaliação atualizada"),
     *     @OA\Response(response=404, description="Avaliação não encontrada")
     * )
     */
    public function update(Request $request, $id)
    {
        $assessment = Assessment::find($id);

        if (!$assessment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assessment not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'type' => 'sometimes|required|string|in:quiz,exam,assignment,project,presentation',
            'subject_id' => 'nullable|exists:subjects,id',
            'class_id' => 'nullable|exists:classes,id',
            'total_points' => 'sometimes|required|numeric|min:0',
            'weight' => 'nullable|numeric|min:0|max:1',
            'due_date' => 'nullable|date',
            'available_from' => 'nullable|date',
            'time_limit' => 'nullable|integer|min:0',
            'attempts_allowed' => 'nullable|integer|min:1',
            'is_published' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $assessment->update($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Assessment updated successfully',
                'data' => $assessment->load(['teacher', 'subject', 'classroom']),
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update assessment',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/v1/teacher/assessments/{id}",
     *     summary="Excluir uma avaliação",
     *     tags={"Assessments"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Avaliação excluída"),
     *     @OA\Response(response=404, description="Avaliação não encontrada")
     * )
     */
    public function destroy($id)
    {
        $assessment = Assessment::find($id);

        if (!$assessment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assessment not found',
            ], 404);
        }

        try {
            $assessment->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Assessment deleted successfully',
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete assessment',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
