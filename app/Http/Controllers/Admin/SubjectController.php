<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Disciplinas
 * API para gerenciamento de disciplinas
 */
class SubjectController extends Controller
{
    /**
     * @endpoint Listar todas as disciplinas
     * @authenticated
     */
    public function index()
    {
        $subjects = Subject::all();
        return response()->json($subjects, 200);
    }

    /**
     * @endpoint Criar uma nova disciplina
     * @authenticated
     * @bodyParam name string required Nome da disciplina
     * @bodyParam code string required Código único da disciplina
     * @bodyParam description string Descrição
     * @bodyParam credits integer Créditos
     * @bodyParam category string Categoria
     * @bodyParam status string Status (active/inactive)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:20|unique:subjects',
            'description' => 'nullable|string',
            'credits' => 'nullable|integer|min:1',
            'category' => 'nullable|string|max:100',
            'status' => 'nullable|in:active,inactive',
        ]);

        $subject = Subject::create($validated);
        return response()->json($subject, 201);
    }

    /**
     * @endpoint Mostrar uma disciplina específica
     * @authenticated
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return response()->json($subject, 200);
    }

    /**
     * @endpoint Atualizar uma disciplina
     * @authenticated
     * @bodyParam name string Nome da disciplina
     * @bodyParam code string Código único da disciplina
     * @bodyParam description string Descrição
     * @bodyParam credits integer Créditos
     * @bodyParam category string Categoria
     * @bodyParam status string Status (active/inactive)
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string|max:100',
            'code' => 'string|max:20|unique:subjects,code,'.$id,
            'description' => 'nullable|string',
            'credits' => 'nullable|integer|min:1',
            'category' => 'nullable|string|max:100',
            'status' => 'nullable|in:active,inactive',
        ]);

        $subject->update($validated);
        return response()->json($subject, 200);
    }

    /**
     * @endpoint Deletar uma disciplina
     * @authenticated
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return response()->json(null, 204);
    }
}
