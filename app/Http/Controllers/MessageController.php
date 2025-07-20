<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Mensagens
 * API para gerenciamento de mensagens
 */
class MessageController extends Controller
{
    /**
     * @endpoint Listar todas as mensagens
     * @authenticated
     */
    public function index()
    {
        $messages = Message::with(['sender', 'recipient'])->get();
        return response()->json($messages, 200);
    }

    /**
     * @endpoint Criar uma nova mensagem
     * @authenticated
     * @bodyParam sender_id integer required ID do remetente
     * @bodyParam recipient_id integer required ID do destinatário
     * @bodyParam content string required Conteúdo
     * @bodyParam is_read boolean Lido
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_id' => 'required|exists:users,id',
            'recipient_id' => 'required|exists:users,id',
            'content' => 'required|string',
            'is_read' => 'nullable|boolean',
        ]);

        $message = Message::create($validated);
        return response()->json($message, 201);
    }

    /**
     * @endpoint Mostrar uma mensagem específica
     * @authenticated
     */
    public function show($id)
    {
        $message = Message::with(['sender', 'recipient'])->findOrFail($id);
        return response()->json($message, 200);
    }

    /**
     * @endpoint Atualizar uma mensagem
     * @authenticated
     * @bodyParam sender_id integer ID do remetente
     * @bodyParam recipient_id integer ID do destinatário
     * @bodyParam content string Conteúdo
     * @bodyParam is_read boolean Lido
     */
    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $validated = $request->validate([
            'sender_id' => 'exists:users,id',
            'recipient_id' => 'exists:users,id',
            'content' => 'string',
            'is_read' => 'nullable|boolean',
        ]);

        $message->update($validated);
        return response()->json($message, 200);
    }

    /**
     * @endpoint Deletar uma mensagem
     * @authenticated
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return response()->json(null, 204);
    }
}
