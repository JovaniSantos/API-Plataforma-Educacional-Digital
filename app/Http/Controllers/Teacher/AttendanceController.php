<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Presenças
 * API para gerenciamento de presenças
 */
class AttendanceController extends Controller
{
    /**
     * @endpoint Listar todas as presenças
     * @authenticated
     */
    public function index()
    {
        $attendance = Attendance::with(['student', 'class', 'subject', 'recordedBy'])->get();
        return response()->json($attendance, 200);
    }

    /**
     * @endpoint Criar uma nova presença
     * @authenticated
     * @bodyParam student_id integer required ID do estudante
     * @bodyParam class_id integer required ID da turma
     * @bodyParam subject_id integer required ID da disciplina
     * @bodyParam attendance_date date required Data da presença
     * @bodyParam status string Status (present/absent/late/excused)
     * @bodyParam notes string Notas
     * @bodyParam recorded_by integer required ID do professor que registrou
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
            'attendance_date' => 'required|date',
            'status' => 'nullable|in:present,absent,late,excused',
            'notes' => 'nullable|string',
            'recorded_by' => 'required|exists:teachers,id',
        ]);

        $attendance = Attendance::create($validated);
        return response()->json($attendance, 201);
    }

    /**
     * @endpoint Mostrar uma presença específica
     * @authenticated
     */
    public function show($id)
    {
        $attendance = Attendance::with(['student', 'class', 'subject', 'recordedBy'])->findOrFail($id);
        return response()->json($attendance, 200);
    }

    /**
     * @endpoint Atualizar uma presença
     * @authenticated
     * @bodyParam student_id integer ID do estudante
     * @bodyParam class_id integer ID da turma
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam attendance_date date Data da presença
     * @bodyParam status string Status (present/absent/late/excused)
     * @bodyParam notes string Notas
     * @bodyParam recorded_by integer ID do professor que registrou
     */
    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $validated = $request->validate([
            'student_id' => 'exists:students,id',
            'class_id' => 'exists:classes,id',
            'subject_id' => 'exists:subjects,id',
            'attendance_date' => 'date',
            'status' => 'nullable|in:present,absent,late,excused',
            'notes' => 'nullable|string',
            'recorded_by' => 'exists:teachers,id',
        ]);

        $attendance->update($validated);
        return response()->json($attendance, 200);
    }

    /**
     * @endpoint Deletar uma presença
     * @authenticated
     */
    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return response()->json(null, 204);
    }
}
