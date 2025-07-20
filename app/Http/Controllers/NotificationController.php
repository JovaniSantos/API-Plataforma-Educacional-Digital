<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Notificações
 * API para gerenciamento de notificações
 */
class NotificationController extends Controller
{
    /**
     * @endpoint Listar todas as notificações
     * @authenticated
     */
    public function index()
    {
        $notifications = Notification::with('user')->get();
        return response()->json($notifications, 200);
    }

    /**
     * @endpoint Criar uma nova notificação
     * @authenticated
     * @bodyParam user_id integer required ID do usuário
     * @bodyParam title string required Título da notificação
     * @bodyParam message string required Mensagem
     * @bodyParam type string Tipo (info/warning/alert/success)
     * @bodyParam is_read boolean Lido
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'type' => 'nullable|in:info,warning,alert,success',
            'is_read' => 'nullable|boolean',
        ]);

        $notification = Notification::create($validated);
        return response()->json($notification, 201);
    }

    /**
     * @endpoint Mostrar uma notificação específica
     * @authenticated
     */
    public function show($id)
    {
        $notification = Notification::with('user')->findOrFail($id);
        return response()->json($notification, 200);
    }

    /**
     * @endpoint Atualizar uma notificação
     * @authenticated
     * @bodyParam user_id integer ID do usuário
     * @bodyParam title string Título da notificação
     * @bodyParam message string Mensagem
     * @bodyParam type string Tipo (info/warning/alert/success)
     * @bodyParam is_read boolean Lido
     */
    public function update(Request $request, $id)
    {
        $notification = Notification::findOrFail($id);
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'title' => 'string|max:255',
            'message' => 'string',
            'type' => 'nullable|in:info,warning,alert,success',
            'is_read' => 'nullable|boolean',
        ]);

        $notification->update($validated);
        return response()->json($notification, 200);
    }

    /**
     * @endpoint Deletar uma notificação
     * @authenticated
     */
    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();
        return response()->json(null, 204);
    }
}
