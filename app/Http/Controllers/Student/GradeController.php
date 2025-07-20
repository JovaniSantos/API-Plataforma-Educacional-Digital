<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Notas
 * API para gerenciamento de notas
 */
class GradeController extends Controller
{
    /**
     * @endpoint Listar todas as notas
     * @authenticated
     */
    public function index()
    {
        $grades = Grade::with(['student', 'subject', 'class'])
            ->where('student_id', auth()->user()->id)
            ->get();
        return response()->json($grades, 200);
    }

    /**
     * @endpoint Criar uma nova nota
     * @authenticated
     * @bodyParam student_id integer required ID do estudante
     * @bodyParam subject_id integer required ID da disciplina
     * @bodyParam class_id integer required ID da turma
     * @bodyParam academic_year string required Ano acadêmico (ex: 2024-2025)
     * @bodyParam quarter_1 float Nota do 1º trimestre
     * @bodyParam quarter_2 float Nota do 2º trimestre
     * @bodyParam quarter_3 float Nota do 3º trimestre
     * @bodyParam final_exam float Nota do exame final
     * @bodyParam final_grade float Nota final
     * @bodyParam status string Status (passed/failed/incomplete)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'class_id' => 'required|exists:classes,id',
            'academic_year' => 'required|string|size:9',
            'quarter_1' => 'nullable|numeric|min:0|max:20',
            'quarter_2' => 'nullable|numeric|min:0|max:20',
            'quarter_3' => 'nullable|numeric|min:0|max:20',
            'final_exam' => 'nullable|numeric|min:0|max:20',
            'final_grade' => 'nullable|numeric|min:0|max:20',
            'status' => 'nullable|in:passed,failed,incomplete',
        ]);

        // Verifica se o usuário autenticado tem permissão para criar a nota
        if (auth()->user()->id !== $validated['student_id'] && auth()->user()->role !== 'admin') {
            return response()->json(['error' => 'Acesso não autorizado'], 403);
        }

        $grade = Grade::create($validated);
        return response()->json($grade, 201);
    }

    /**
     * @endpoint Mostrar uma nota específica
     * @authenticated
     */
    public function show($id)
    {
        $grade = Grade::with(['student', 'subject', 'class'])->findOrFail($id);

        // Verifica se o usuário autenticado pode visualizar a nota
        if (auth()->user()->id !== $grade->student_id && auth()->user()->role !== 'admin') {
            return response()->json(['error' => 'Acesso não autorizado'], 403);
        }

        return response()->json($grade, 200);
    }

    /**
     * @endpoint Atualizar uma nota
     * @authenticated
     * @bodyParam student_id integer ID do estudante
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam class_id integer ID da turma
     * @bodyParam academic_year string Ano acadêmico (ex: 2024-2025)
     * @bodyParam quarter_1 float Nota do 1º trimestre
     * @bodyParam quarter_2 float Nota do 2º trimestre
     * @bodyParam quarter_3 float Nota do 3º trimestre
     * @bodyParam final_exam float Nota do exame final
     * @bodyParam final_grade float Nota final
     * @bodyParam status string Status (passed/failed/incomplete)
     */
    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);

        // Verifica se o usuário autenticado pode atualizar a nota
        if (auth()->user()->id !== $grade->student_id && auth()->user()->role !== 'admin') {
            return response()->json(['error' => 'Acesso não autorizado'], 403);
        }

        $validated = $request->validate([
            'student_id' => 'exists:students,id',
            'subject_id' => 'exists:subjects,id',
            'class_id' => 'exists:classes,id',
            'academic_year' => 'string|size:9',
            'quarter_1' => 'nullable|numeric|min:0|max:20',
            'quarter_2' => 'nullable|numeric|min:0|max:20',
            'quarter_3' => 'nullable|numeric|min:0|max:20',
            'final_exam' => 'nullable|numeric|min:0|max:20',
            'final_grade' => 'nullable|numeric|min:0|max:20',
            'status' => 'nullable|in:passed,failed,incomplete',
        ]);

        $grade->update($validated);
        return response()->json($grade, 200);
    }

    /**
     * @endpoint Deletar uma nota
     * @authenticated
     */
    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);

        // Verifica se o usuário autenticado pode deletar a nota
        if (auth()->user()->role !== 'admin') {
            return response()->json(['error' => 'Acesso não autorizado'], 403);
        }

        $grade->delete();
        return response()->json(null, 204);
    }

    /**
     * @endpoint Resumo de notas do estudante
     * @authenticated
     */
    public function summary(Request $request)
    {
        $studentId = auth()->user()->id;
        $grades = Grade::with(['subject', 'class'])
            ->where('student_id', $studentId)
            ->get()
            ->groupBy('academic_year')
            ->map(function ($yearGrades) {
                return [
                    'academic_year' => $yearGrades->first()->academic_year,
                    'subjects' => $yearGrades->map(function ($grade) {
                        return [
                            'subject' => $grade->subject->name,
                            'class' => $grade->class->name,
                            'quarter_1' => $grade->quarter_1,
                            'quarter_2' => $grade->quarter_2,
                            'quarter_3' => $grade->quarter_3,
                            'final_exam' => $grade->final_exam,
                            'final_grade' => $grade->final_grade,
                            'status' => $grade->status,
                        ];
                    }),
                    'average_final_grade' => $yearGrades->avg('final_grade'),
                ];
            });

        return response()->json($grades, 200);
    }
}
