<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\SubmissionAnswer;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Respostas de Submissões
 * API para gerenciamento de respostas de submissões
 */
class SubmissionAnswerController extends Controller
{
    /**
     * @endpoint Listar todas as respostas de submissões
     * @authenticated
     */
    public function index()
    {
        $answers = SubmissionAnswer::with(['submission', 'question'])->get();
        return response()->json($answers, 200);
    }

    /**
     * @endpoint Criar uma nova resposta de submissão
     * @authenticated
     * @bodyParam submission_id integer required ID da submissão
     * @bodyParam question_id integer required ID da questão
     * @bodyParam answer_text string Texto da resposta
     * @bodyParam points_earned float Pontos obtidos
     * @bodyParam is_correct boolean Resposta correta
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'question_id' => 'required|exists:activity_questions,id',
            'answer_text' => 'nullable|string',
            'points_earned' => 'nullable|numeric|min:0',
            'is_correct' => 'nullable|boolean',
        ]);

        $answer = SubmissionAnswer::create($validated);
        return response()->json($answer, 201);
    }

    /**
     * @endpoint Mostrar uma resposta específica
     * @authenticated
     */
    public function show($id)
    {
        $answer = SubmissionAnswer::with(['submission', 'question'])->findOrFail($id);
        return response()->json($answer, 200);
    }

    /**
     * @endpoint Atualizar uma resposta
     * @authenticated
     * @bodyParam submission_id integer ID da submissão
     * @bodyParam question_id integer ID da questão
     * @bodyParam answer_text string Texto da resposta
     * @bodyParam points_earned float Pontos obtidos
     * @bodyParam is_correct boolean Resposta correta
     */
    public function update(Request $request, $id)
    {
        $answer = SubmissionAnswer::findOrFail($id);
        $validated = $request->validate([
            'submission_id' => 'exists:submissions,id',
            'question_id' => 'exists:activity_questions,id',
            'answer_text' => 'nullable|string',
            'points_earned' => 'nullable|numeric|min:0',
            'is_correct' => 'nullable|boolean',
        ]);

        $answer->update($validated);
        return response()->json($answer, 200);
    }

    /**
     * @endpoint Deletar uma resposta
     * @authenticated
     */
    public function destroy($id)
    {
        $answer = SubmissionAnswer::findOrFail($id);
        $answer->delete();
        return response()->json(null, 204);
    }
}
