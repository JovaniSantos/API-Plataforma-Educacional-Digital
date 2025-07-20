<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventParticipant;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Participantes de Eventos
 * API para gerenciamento de participantes de eventos
 */
class EventParticipantController extends Controller
{
    /**
     * @endpoint Listar todos os participantes de eventos
     * @authenticated
     */
    public function index()
    {
        $participants = EventParticipant::with(['event', 'user'])->get();
        return response()->json($participants, 200);
    }

    /**
     * @endpoint Criar um novo participante de evento
     * @authenticated
     * @bodyParam event_id integer required ID do evento
     * @bodyParam user_id integer required ID do usuário
     * @bodyParam status string Status (confirmed/pending/declined)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:calendar_events,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'nullable|in:confirmed,pending,declined',
        ]);

        $participant = EventParticipant::create($validated);
        return response()->json($participant, 201);
    }

    /**
     * @endpoint Mostrar um participante específico
     * @authenticated
     */
    public function show($id)
    {
        $participant = EventParticipant::with(['event', 'user'])->findOrFail($id);
        return response()->json($participant, 200);
    }

    /**
     * @endpoint Atualizar um participante
     * @authenticated
     * @bodyParam event_id integer ID do evento
     * @bodyParam user_id integer ID do usuário
     * @bodyParam status string Status (confirmed/pending/declined)
     */
    public function update(Request $request, $id)
    {
        $participant = EventParticipant::findOrFail($id);
        $validated = $request->validate([
            'event_id' => 'exists:calendar_events,id',
            'user_id' => 'exists:users,id',
            'status' => 'nullable|in:confirmed,pending,declined',
        ]);

        $participant->update($validated);
        return response()->json($participant, 200);
    }

    /**
     * @endpoint Deletar um participante
     * @authenticated
     */
    public function destroy($id)
    {
        $participant = EventParticipant::findOrFail($id);
        $participant->delete();
        return response()->json(null, 204);
    }
}
