<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Matrículas
 * API para gerenciamento de matrículas
 */
class EnrollmentController extends Controller
{
    /**
     * @endpoint Listar todas as matrículas
     * @authenticated
     */
    public function index()
    {
        $enrollments = Enrollment::with(['student', 'class'])->get();
        return response()->json($enrollments, 200);
    }

    /**
     * @endpoint Criar uma nova matrícula
     * @authenticated
     * @bodyParam student_id integer required ID do estudante
     * @bodyParam class_id integer required ID da turma
     * @bodyParam enrollment_date date required Data de matrícula
     * @bodyParam status string Status (active/transferred/graduated/dropped)
     * @bodyParam academic_year string required Ano acadêmico (ex: 2024-2025)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'class_id' => 'required|exists:classes,id',
            'enrollment_date' => 'required|date',
            'status' => 'nullable|in:active,transferred,graduated,dropped',
            'academic_year' => 'required|string|size:9',
        ]);

        $enrollment = Enrollment::create($validated);
        return response()->json($enrollment, 201);
    }

    /**
     * @endpoint Mostrar uma matrícula específica
     * @authenticated
     */
    public function show($id)
    {
        $enrollment = Enrollment::with(['student', 'class'])->findOrFail($id);
        return response()->json($enrollment, 200);
    }

    /**
     * @endpoint Atualizar uma matrícula
     * @authenticated
     * @bodyParam student_id integer ID do estudante
     * @bodyParam class_id integer ID da turma
     * @bodyParam enrollment_date date Data de matrícula
     * @bodyParam status string Status (active/transferred/graduated/dropped)
     * @bodyParam academic_year string Ano acadêmico (ex: 2024-2025)
     */
    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $validated = $request->validate([
            'student_id' => 'exists:students,id',
            'class_id' => 'exists:classes,id',
            'enrollment_date' => 'date',
            'status' => 'nullable|in:active,transferred,graduated,dropped',
            'academic_year' => 'string|size:9',
        ]);

        $enrollment->update($validated);
        return response()->json($enrollment, 200);
    }

    /**
     * @endpoint Deletar uma matrícula
     * @authenticated
     */
    public function destroy($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();
        return response()->json(null, 204);
    }
}
