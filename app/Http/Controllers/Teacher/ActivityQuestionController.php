<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\ActivityQuestion;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Questões de Atividades
 * API para gerenciamento de questões de atividades
 */
class ActivityQuestionController extends Controller
{
    /**
     * @endpoint Listar todas as questões de atividades
     * @authenticated
     */
    public function index()
    {
        $questions = ActivityQuestion::with('activity')->get();
        return response()->json($questions, 200);
    }

    /**
     * @endpoint Criar uma nova questão de atividade
     * @authenticated
     * @bodyParam activity_id integer required ID da atividade
     * @bodyParam question_text string required Texto da questão
     * @bodyParam question_type string required Tipo da questão (multiple_choice/true_false/short_answer/essay)
     * @bodyParam points float required Pontos
     * @bodyParam order_number integer required Número de ordem
     * @bodyParam options json Opções (para múltipla escolha)
     * @bodyParam correct_answer string Resposta correta
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'question_text' => 'required|string',
            'question_type' => 'required|in:multiple_choice,true_false,short_answer,essay',
            'points' => 'required|numeric|min:0',
            'order_number' => 'required|integer|min:1',
            'options' => 'nullable|json',
            'correct_answer' => 'nullable|string',
        ]);

        $question = ActivityQuestion::create($validated);
        return response()->json($question, 201);
    }

    /**
     * @endpoint Mostrar uma questão específica
     * @authenticated
     */
    public function show($id)
    {
        $question = ActivityQuestion::with('activity')->findOrFail($id);
        return response()->json($question, 200);
    }

    /**
     * @endpoint Atualizar uma questão
     * @authenticated
     * @bodyParam activity_id integer ID da atividade
     * @bodyParam question_text string Texto da questão
     * @bodyParam question_type string Tipo da questão (multiple_choice/true_false/short_answer/essay)
     * @bodyParam points float Pontos
     * @bodyParam order_number integer Número de ordem
     * @bodyParam options json Opções (para múltipla escolha)
     * @bodyParam correct_answer string Resposta correta
     */
    public function update(Request $request, $id)
    {
        $question = ActivityQuestion::findOrFail($id);
        $validated = $request->validate([
            'activity_id' => 'exists:activities,id',
            'question_text' => 'string',
            'question_type' => 'in:multiple_choice,true_false,short_answer,essay',
            'points' => 'numeric|min:0',
            'order_number' => 'integer|min:1',
            'options' => 'nullable|json',
            'correct_answer' => 'nullable|string',
        ]);

        $question->update($validated);
        return response()->json($question, 200);
    }

    /**
     * @endpoint Deletar uma questão
     * @authenticated
     */
    public function destroy($id)
    {
        $question = ActivityQuestion::findOrFail($id);
        $question->delete();
        return response()->json(null, 204);
    }
}
