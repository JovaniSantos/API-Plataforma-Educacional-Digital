<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalendarEvent;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Eventos de Calendário
 * API para gerenciamento de eventos de calendário
 */
class CalendarEventController extends Controller
{
    /**
     * @endpoint Listar todos os eventos de calendário
     * @authenticated
     */
    public function index()
    {
        $events = CalendarEvent::with(['class', 'subject', 'createdBy'])->get();
        return response()->json($events, 200);
    }

    /**
     * @endpoint Criar um novo evento de calendário
     * @authenticated
     * @bodyParam title string required Título do evento
     * @bodyParam description string Descrição
     * @bodyParam start_time datetime required Data e hora de início
     * @bodyParam end_time datetime Data e hora de término
     * @bodyParam class_id integer ID da turma
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam created_by integer required ID do usuário que criou
     * @bodyParam event_type string Tipo de evento (exam/meeting/holiday/other)
     * @bodyParam status string Status (active/cancelled)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date|after:start_time',
            'class_id' => 'nullable|exists:classes,id',
            'subject_id' => 'nullable|exists:subjects,id',
            'created_by' => 'required|exists:users,id',
            'event_type' => 'nullable|in:exam,meeting,holiday,other',
            'status' => 'nullable|in:active,cancelled',
        ]);

        $event = CalendarEvent::create($validated);
        return response()->json($event, 201);
    }

    /**
     * @endpoint Mostrar um evento específico
     * @authenticated
     */
    public function show($id)
    {
        $event = CalendarEvent::with(['class', 'subject', 'createdBy'])->findOrFail($id);
        return response()->json($event, 200);
    }

    /**
     * @endpoint Atualizar um evento
     * @authenticated
     * @bodyParam title string Título do evento
     * @bodyParam description string Descrição
     * @bodyParam start_time datetime Data e hora de início
     * @bodyParam end_time datetime Data e hora de término
     * @bodyParam class_id integer ID da turma
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam created_by integer ID do usuário que criou
     * @bodyParam event_type string Tipo de evento (exam/meeting/holiday/other)
     * @bodyParam status string Status (active/cancelled)
     */
    public function update(Request $request, $id)
    {
        $event = CalendarEvent::findOrFail($id);
        $validated = $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'date',
            'end_time' => 'nullable|date|after:start_time',
            'class_id' => 'nullable|exists:classes,id',
            'subject_id' => 'nullable|exists:subjects,id',
            'created_by' => 'exists:users,id',
            'event_type' => 'nullable|in:exam,meeting,holiday,other',
            'status' => 'nullable|in:active,cancelled',
        ]);

        $event->update($validated);
        return response()->json($event, 200);
    }

    /**
     * @endpoint Deletar um evento
     * @authenticated
     */
    public function destroy($id)
    {
        $event = CalendarEvent::findOrFail($id);
        $event->delete();
        return response()->json(null, 204);
    }
}
