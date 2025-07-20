<?php

namespace App\Http\Controllers;

use App\Models\ForumLike;
use App\Models\User;
use App\Models\ForumDiscussion;
use App\Models\ForumReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

/**
 * @OA\Tag(name="Forum Likes", description="Endpoints para gerenciamento de likes no fórum")
 */
class ForumLikeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/v1/forum-likes",
     *     summary="Listar todos os likes do fórum",
     *     tags={"Forum Likes"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(response=200, description="Lista de likes"),
     *     @OA\Response(response=401, description="Não autorizado")
     * )
     */
    public function index()
    {
        $likes = ForumLike::with(['user', 'discussion', 'reply'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $likes,
            'count' => $likes->count(),
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/v1/forum-likes",
     *     summary="Criar um novo like no fórum",
     *     tags={"Forum Likes"},
     *     security={{"sanctum": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"user_id"},
     *             @OA\Property(property="user_id", type="integer", example=1),
     *             @OA\Property(property="discussion_id", type="integer", example=1),
     *             @OA\Property(property="reply_id", type="integer", example=1)
     *         )
     *     ),
     *     @OA\Response(response=201, description="Like criado"),
     *     @OA\Response(response=422, description="Erro de validação")
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'discussion_id' => 'nullable|exists:forum_discussions,id',
            'reply_id' => 'nullable|exists:forum_replies,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Garantir que apenas um (discussion_id ou reply_id) seja fornecido
        if (($request->discussion_id && $request->reply_id) || (!$request->discussion_id && !$request->reply_id)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Deve ser fornecido apenas discussion_id ou reply_id',
            ], 422);
        }

        try {
            $likeData = $request->only(['user_id', 'discussion_id', 'reply_id']);
            $forumLike = ForumLike::create($likeData);

            // Atualizar contagem de likes no discussion ou reply (exemplo)
            if ($request->discussion_id) {
                $discussion = ForumDiscussion::find($request->discussion_id);
                $discussion->increment('like_count');
            } elseif ($request->reply_id) {
                $reply = ForumReply::find($request->reply_id);
                $reply->increment('like_count');
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Like created successfully',
                'data' => $forumLike->load(['user', 'discussion', 'reply']),
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create like',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/v1/forum-likes/{id}",
     *     summary="Excluir um like do fórum",
     *     tags={"Forum Likes"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Like excluído"),
     *     @OA\Response(response=404, description="Like não encontrado")
     * )
     */
    public function destroy($id)
    {
        $forumLike = ForumLike::find($id);

        if (!$forumLike) {
            return response()->json([
                'status' => 'error',
                'message' => 'Like not found',
            ], 404);
        }

        try {
            // Decrementar contagem de likes se aplicável
            if ($forumLike->discussion_id) {
                $discussion = ForumDiscussion::find($forumLike->discussion_id);
                $discussion->decrement('like_count');
            } elseif ($forumLike->reply_id) {
                $reply = ForumReply::find($forumLike->reply_id);
                $reply->decrement('like_count');
            }

            $forumLike->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Like deleted successfully',
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete like',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
