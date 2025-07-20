<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Submissões
 * API para gerenciamento de submissões
 */
class SubmissionController extends Controller
{
    /**
     * @endpoint Listar todas as submissões
     * @authenticated
     */
    public function index()
    {
        $submissions = Submission::with(['activity', 'student', 'gradedBy'])->get();
        return response()->json($submissions, 200);
    }

    /**
     * @endpoint Criar uma nova submissão
     * @authenticated
     * @bodyParam activity_id integer required ID da atividade
     * @bodyParam student_id integer required ID do estudante
     * @bodyParam submission_date datetime required Data de submissão
     * @bodyParam content string Conteúdo
     * @bodyParam attachments json Anexos
     * @bodyParam status string Status (submitted/graded/late)
     * @bodyParam grade float Nota
     * @bodyParam feedback string Feedback
     * @bodyParam graded_by integer ID do professor que corrigiu
     * @bodyParam graded_at datetime Data de correção
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'student_id' => 'required|exists:students,id',
            'submission_date' => 'required|date',
            'content' => 'nullable|string',
            'attachments' => 'nullable|json',
            'status' => 'nullable|in:submitted,graded,late',
            'grade' => 'nullable|numeric|min:0',
            'feedback' => 'nullable|string',
            'graded_by' => 'nullable|exists:teachers,id',
            'graded_at' => 'nullable|date',
        ]);

        $submission = Submission::create($validated);
        return response()->json($submission, 201);
    }

    /**
     * @endpoint Mostrar uma submissão específica
     * @authenticated
     */
    public function show($id)
    {
        $submission = Submission::with(['activity', 'student', 'gradedBy'])->findOrFail($id);
        return response()->json($submission, 200);
    }

    /**
     * @endpoint Atualizar uma submissão
     * @authenticated
     * @bodyParam activity_id integer ID da atividade
     * @bodyParam student_id integer ID do estudante
     * @bodyParam submission_date datetime Data de submissão
     * @bodyParam content string Conteúdo
     * @bodyParam attachments json Anexos
     * @bodyParam status string Status (submitted/graded/late)
     * @bodyParam grade float Nota
     * @bodyParam feedback string Feedback
     * @bodyParam graded_by integer ID do professor que corrigiu
     * @bodyParam graded_at datetime Data de correção
     */
    public function update(Request $request, $id)
    {
        $submission = Submission::findOrFail($id);
        $validated = $request->validate([
            'activity_id' => 'exists:activities,id',
            'student_id' => 'exists:students,id',
            'submission_date' => 'date',
            'content' => 'nullable|string',
            'attachments' => 'nullable|json',
            'status' => 'nullable|in:submitted,graded,late',
            'grade' => 'nullable|numeric|min:0',
            'feedback' => 'nullable|string',
            'graded_by' => 'nullable|exists:teachers,id',
            'graded_at' => 'nullable|date',
        ]);

        $submission->update($validated);
        return response()->json($submission, 200);
    }

    /**
     * @endpoint Deletar uma submissão
     * @authenticated
     */
    public function destroy($id)
    {
        $submission = Submission::findOrFail($id);
        $submission->delete();
        return response()->json(null, 204);
    }
}
