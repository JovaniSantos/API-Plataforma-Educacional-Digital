<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Atividades
 * API para gerenciamento de atividades
 */
class ActivityController extends Controller
{
    /**
     * @endpoint Listar todas as atividades
     * @authenticated
     */
    public function index()
    {
        $activities = Activity::with(['teacher', 'class', 'subject'])->get();
        return response()->json($activities, 200);
    }

    /**
     * @endpoint Criar uma nova atividade
     * @authenticated
     * @bodyParam title string required Título da atividade
     * @bodyParam description string Descrição
     * @bodyParam type string required Tipo (exam/quiz/assignment/project)
     * @bodyParam teacher_id integer required ID do professor
     * @bodyParam class_id integer required ID da turma
     * @bodyParam subject_id integer required ID da disciplina
     * @bodyParam total_points float required Total de pontos
     * @bodyParam duration_minutes integer Duração em minutos
     * @bodyParam due_date datetime required Data de entrega
     * @bodyParam start_date datetime Data de início
     * @bodyParam instructions string Instruções
     * @bodyParam status string Status (draft/published/closed)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:exam,quiz,assignment,project',
            'teacher_id' => 'required|exists:teachers,id',
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
            'total_points' => 'required|numeric|min:0',
            'duration_minutes' => 'nullable|integer|min:0',
            'due_date' => 'required|date',
            'start_date' => 'nullable|date',
            'instructions' => 'nullable|string',
            'status' => 'nullable|in:draft,published,closed',
        ]);

        $activity = Activity::create($validated);
        return response()->json($activity, 201);
    }

    /**
     * @endpoint Mostrar uma atividade específica
     * @authenticated
     */
    public function show($id)
    {
        $activity = Activity::with(['teacher', 'class', 'subject'])->findOrFail($id);
        return response()->json($activity, 200);
    }

    /**
     * @endpoint Atualizar uma atividade
     * @authenticated
     * @bodyParam title string Título da atividade
     * @bodyParam description string Descrição
     * @bodyParam type string Tipo (exam/quiz/assignment/project)
     * @bodyParam teacher_id integer ID do professor
     * @bodyParam class_id integer ID da turma
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam total_points float Total de pontos
     * @bodyParam duration_minutes integer Duração em minutos
     * @bodyParam due_date datetime Data de entrega
     * @bodyParam start_date datetime Data de início
     * @bodyParam instructions string Instruções
     * @bodyParam status string Status (draft/published/closed)
     */
    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $validated = $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'type' => 'in:exam,quiz,assignment,project',
            'teacher_id' => 'exists:teachers,id',
            'class_id' => 'exists:classes,id',
            'subject_id' => 'exists:subjects,id',
            'total_points' => 'numeric|min:0',
            'duration_minutes' => 'nullable|integer|min:0',
            'due_date' => 'date',
            'start_date' => 'nullable|date',
            'instructions' => 'nullable|string',
            'status' => 'nullable|in:draft,published,closed',
        ]);

        $activity->update($validated);
        return response()->json($activity, 200);
    }

    /**
     * @endpoint Deletar uma atividade
     * @authenticated
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return response()->json(null, 204);
    }
}
