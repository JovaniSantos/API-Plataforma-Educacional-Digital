<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForumReply;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Respostas de Fórum
 * API para gerenciamento de respostas de fórum
 */
class ForumReplyController extends Controller
{
    /**
     * @endpoint Listar todas as respostas de fórum
     * @authenticated
     */
    public function index()
    {
        $replies = ForumReply::with(['topic', 'author', 'parentReply'])->get();
        return response()->json($replies, 200);
    }

    /**
     * @endpoint Criar uma nova resposta de fórum
     * @authenticated
     * @bodyParam topic_id integer required ID do tópico
     * @bodyParam author_id integer required ID do autor
     * @bodyParam content string required Conteúdo
     * @bodyParam parent_reply_id integer ID da resposta pai
     * @bodyParam status string Status (active/deleted)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'topic_id' => 'required|exists:forum_topics,id',
            'author_id' => 'required|exists:users,id',
            'content' => 'required|string',
            'parent_reply_id' => 'nullable|exists:forum_replies,id',
            'status' => 'nullable|in:active,deleted',
        ]);

        $reply = ForumReply::create($validated);
        return response()->json($reply, 201);
    }

    /**
     * @endpoint Mostrar uma resposta específica
     * @authenticated
     */
    public function show($id)
    {
        $reply = ForumReply::with(['topic', 'author', 'parentReply'])->findOrFail($id);
        return response()->json($reply, 200);
    }

    /**
     * @endpoint Atualizar uma resposta
     * @authenticated
     * @bodyParam topic_id integer ID do tópico
     * @bodyParam author_id integer ID do autor
     * @bodyParam content string Conteúdo
     * @bodyParam parent_reply_id integer ID da resposta pai
     * @bodyParam status string Status (active/deleted)
     */
    public function update(Request $request, $id)
    {
        $reply = ForumReply::findOrFail($id);
        $validated = $request->validate([
            'topic_id' => 'exists:forum_topics,id',
            'author_id' => 'exists:users,id',
            'content' => 'string',
            'parent_reply_id' => 'nullable|exists:forum_replies,id',
            'status' => 'nullable|in:active,deleted',
        ]);

        $reply->update($validated);
        return response()->json($reply, 200);
    }

    /**
     * @endpoint Deletar uma resposta
     * @authenticated
     */
    public function destroy($id)
    {
        $reply = ForumReply::findOrFail($id);
        $reply->delete();
        return response()->json(null, 204);
    }
}
