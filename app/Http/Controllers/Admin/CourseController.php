<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

/**
 * @OA\Tag(name="Courses", description="Endpoints para gerenciamento de cursos")
 */
class CourseController extends Controller
{
    /**
     * @OA\Get(
     *     path="/v1/admin/courses",
     *     summary="Listar todos os cursos",
     *     tags={"Courses"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Lista de cursos"),
     *     @OA\Response(response=401, description="Não autorizado")
     * )
     */
    public function index()
    {
        $courses = Course::with('school')->get();
        return response()->json([
            'status' => 'success',
            'data' => $courses,
            'count' => $courses->count(),
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/v1/admin/courses",
     *     summary="Criar um novo curso",
     *     tags={"Courses"},
     *     security={{"sanctum": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "code", "duration_years", "total_credits", "school_id", "degree_type"},
     *             @OA\Property(property="name", type="string", example="Engenharia Informática"),
     *             @OA\Property(property="code", type="string", example="ENGINF"),
     *             @OA\Property(property="description", type="string", example="Curso de graduação em TI"),
     *             @OA\Property(property="duration_years", type="integer", example=4),
     *             @OA\Property(property="total_credits", type="integer", example=240),
     *             @OA\Property(property="school_id", type="integer", example=1),
     *             @OA\Property(property="department", type="string", example="Tecnologia"),
     *             @OA\Property(property="degree_type", type="string", enum={"Licenciatura", "Mestrado", "Doutorado"}, example="Licenciatura"),
     *             @OA\Property(property="is_active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response=201, description="Curso criado"),
     *     @OA\Response(response=422, description="Erro de validação")
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:courses,code',
            'description' => 'nullable|string',
            'duration_years' => 'required|integer|min:1',
            'total_credits' => 'required|integer|min:1',
            'school_id' => 'required|integer|exists:schools,id',
            'department' => 'nullable|string|max:100',
            'degree_type' => 'required|string|in:Licenciatura,Mestrado,Doutorado',
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
            $course = Course::create($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Course created successfully',
                'data' => $course->load('school'),
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create course',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/v1/admin/courses/{id}",
     *     summary="Exibir um curso",
     *     tags={"Courses"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Curso encontrado"),
     *     @OA\Response(response=404, description="Curso não encontrado")
     * )
     */
    public function show($id)
    {
        $course = Course::with('school')->find($id);

        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $course,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/v1/admin/courses/{id}",
     *     summary="Atualizar um curso",
     *     tags={"Courses"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="Engenharia Informática"),
     *             @OA\Property(property="code", type="string", example="ENGINF"),
     *             @OA\Property(property="description", type="string", example="Curso de graduação em TI"),
     *             @OA\Property(property="duration_years", type="integer", example=4),
     *             @OA\Property(property="total_credits", type="integer", example=240),
     *             @OA\Property(property="school_id", type="integer", example=1),
     *             @OA\Property(property="department", type="string", example="Tecnologia"),
     *             @OA\Property(property="degree_type", type="string", enum={"Licenciatura", "Mestrado", "Doutorado"}, example="Licenciatura"),
     *             @OA\Property(property="is_active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response=200, description="Curso atualizado"),
     *     @OA\Response(response=404, description="Curso não encontrado")
     * )
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'code' => 'sometimes|required|string|max:20|unique:courses,code,' . $id,
            'description' => 'nullable|string',
            'duration_years' => 'sometimes|required|integer|min:1',
            'total_credits' => 'sometimes|required|integer|min:1',
            'school_id' => 'sometimes|required|integer|exists:schools,id',
            'department' => 'nullable|string|max:100',
            'degree_type' => 'sometimes|required|string|in:Licenciatura,Mestrado,Doutorado',
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
            $course->update($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Course updated successfully',
                'data' => $course->load('school'),
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update course',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/v1/admin/courses/{id}",
     *     summary="Excluir um curso",
     *     tags={"Courses"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Curso excluído"),
     *     @OA\Response(response=404, description="Curso não encontrado")
     * )
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found',
            ], 404);
        }

        try {
            $course->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Course deleted successfully',
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete course. It may have related records.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
