<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Tópicos de Fórum
 * API para gerenciamento de tópicos de fórum
 */
class ForumTopicController extends Controller
{
    /**
     * @endpoint Listar todos os tópicos de fórum
     * @authenticated
     */
    public function index()
    {
        $topics = ForumTopic::with(['category', 'author'])->get();
        return response()->json($topics, 200);
    }

    /**
     * @endpoint Criar um novo tópico de fórum
     * @authenticated
     * @bodyParam category_id integer required ID da categoria
     * @bodyParam title string required Título do tópico
     * @bodyParam content string required Conteúdo
     * @bodyParam author_id integer required ID do autor
     * @bodyParam status string Status (open/closed/pinned)
     * @bodyParam views_count integer Contagem de visualizações
     * @bodyParam replies_count integer Contagem de respostas
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:forum_categories,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'status' => 'nullable|in:open,closed,pinned',
            'views_count' => 'nullable|integer|min:0',
            'replies_count' => 'nullable|integer|min:0',
        ]);

        $topic = ForumTopic::create($validated);
        return response()->json($topic, 201);
    }

    /**
     * @endpoint Mostrar um tópico específico
     * @authenticated
     */
    public function show($id)
    {
        $topic = ForumTopic::with(['category', 'author'])->findOrFail($id);
        return response()->json($topic, 200);
    }

    /**
     * @endpoint Atualizar um tópico
     * @authenticated
     * @bodyParam category_id integer ID da categoria
     * @bodyParam title string Título do tópico
     * @bodyParam content string Conteúdo
     * @bodyParam author_id integer ID do autor
     * @bodyParam status string Status (open/closed/pinned)
     * @bodyParam views_count integer Contagem de visualizações
     * @bodyParam replies_count integer Contagem de respostas
     */
    public function update(Request $request, $id)
    {
        $topic = ForumTopic::findOrFail($id);
        $validated = $request->validate([
            'category_id' => 'exists:forum_categories,id',
            'title' => 'string|max:255',
            'content' => 'string',
            'author_id' => 'exists:users,id',
            'status' => 'nullable|in:open,closed,pinned',
            'views_count' => 'nullable|integer|min:0',
            'replies_count' => 'nullable|integer|min:0',
        ]);

        $topic->update($validated);
        return response()->json($topic, 200);
    }

    /**
     * @endpoint Deletar um tópico
     * @authenticated
     */
    public function destroy($id)
    {
        $topic = ForumTopic::findOrFail($id);
        $topic->delete();
        return response()->json(null, 204);
    }
}
