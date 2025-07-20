<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\TeacherAssignment;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Atribuições de Professores
 * API para gerenciamento de atribuições de professores
 */
class TeacherAssignmentController extends Controller
{
    /**
     * @endpoint Listar todas as atribuições de professores
     * @authenticated
     */
    public function index()
    {
        $assignments = TeacherAssignment::with(['teacher', 'class', 'subject'])->get();
        return response()->json($assignments, 200);
    }

    /**
     * @endpoint Criar uma nova atribuição de professor
     * @authenticated
     * @bodyParam teacher_id integer required ID do professor
     * @bodyParam class_id integer required ID da turma
     * @bodyParam subject_id integer required ID da disciplina
     * @bodyParam academic_year string required Ano acadêmico (ex: 2024-2025)
     * @bodyParam status string Status (active/inactive)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
            'academic_year' => 'required|string|size:9',
            'status' => 'nullable|in:active,inactive',
        ]);

        $assignment = TeacherAssignment::create($validated);
        return response()->json($assignment, 201);
    }

    /**
     * @endpoint Mostrar uma atribuição específica
     * @authenticated
     */
    public function show($id)
    {
        $assignment = TeacherAssignment::with(['teacher', 'class', 'subject'])->findOrFail($id);
        return response()->json($assignment, 200);
    }

    /**
     * @endpoint Atualizar uma atribuição
     * @authenticated
     * @bodyParam teacher_id integer ID do professor
     * @bodyParam class_id integer ID da turma
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam academic_year string Ano acadêmico (ex: 2024-2025)
     * @bodyParam status string Status (active/inactive)
     */
    public function update(Request $request, $id)
    {
        $assignment = TeacherAssignment::findOrFail($id);
        $validated = $request->validate([
            'teacher_id' => 'exists:teachers,id',
            'class_id' => 'exists:classes,id',
            'subject_id' => 'exists:subjects,id',
            'academic_year' => 'string|size:9',
            'status' => 'nullable|in:active,inactive',
        ]);

        $assignment->update($validated);
        return response()->json($assignment, 200);
    }

    /**
     * @endpoint Deletar uma atribuição
     * @authenticated
     */
    public function destroy($id)
    {
        $assignment = TeacherAssignment::findOrFail($id);
        $assignment->delete();
        return response()->json(null, 204);
    }
}
