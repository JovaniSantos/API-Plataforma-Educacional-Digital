<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Class;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Turmas
 * API para gerenciamento de turmas
 */
class ClasseController extends Controller
{
    /**
     * @endpoint Listar todas as turmas
     * @authenticated
     */
    public function index()
    {
        $classes = Classe::with('school')->get();
        return response()->json($classes, 200);
    }

    /**
     * @endpoint Criar uma nova turma
     * @authenticated
     * @bodyParam name string required Nome da turma
     * @bodyParam grade_level string required Nível escolar (10/11/12)
     * @bodyParam section string required Seção
     * @bodyParam school_id integer required ID da escola
     * @bodyParam academic_year string required Ano acadêmico (ex: 2024-2025)
     * @bodyParam max_students integer Máximo de estudantes
     * @bodyParam status string Status (active/inactive)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'grade_level' => 'required|in:10,11,12',
            'section' => 'required|string|max:10',
            'school_id' => 'required|exists:schools,id',
            'academic_year' => 'required|string|size:9',
            'max_students' => 'nullable|integer|min:1',
            'status' => 'nullable|in:active,inactive',
        ]);

        $class = Classe::create($validated);
        return response()->json($class, 201);
    }

    /**
     * @endpoint Mostrar uma turma específica
     * @authenticated
     */
    public function show($id)
    {
        $class = Classe::with('school')->findOrFail($id);
        return response()->json($class, 200);
    }

    /**
     * @endpoint Atualizar uma turma
     * @authenticated
     * @bodyParam name string Nome da turma
     * @bodyParam grade_level string Nível escolar (10/11/12)
     * @bodyParam section string Seção
     * @bodyParam school_id integer ID da escola
     * @bodyParam academic_year string Ano acadêmico (ex: 2024-2025)
     * @bodyParam max_students integer Máximo de estudantes
     * @bodyParam status string Status (active/inactive)
     */
    public function update(Request $request, $id)
    {
        $class = Classe::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string|max:100',
            'grade_level' => 'in:10,11,12',
            'section' => 'string|max:10',
            'school_id' => 'exists:schools,id',
            'academic_year' => 'string|size:9',
            'max_students' => 'nullable|integer|min:1',
            'status' => 'nullable|in:active,inactive',
        ]);

        $class->update($validated);
        return response()->json($class, 200);
    }

    /**
     * @endpoint Deletar uma turma
     * @authenticated
     */
    public function destroy($id)
    {
        $class = Classe::findOrFail($id);
        $class->delete();
        return response()->json(null, 204);
    }
}
