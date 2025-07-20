<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Estudantes
 * API para gerenciamento de estudantes
 */
class StudentController extends Controller
{
    /**
     * @endpoint Listar todos os estudantes
     * @authenticated
     */
    public function index()
    {
        $students = Student::with('user')->get();
        return response()->json($students, 200);
    }

    /**
     * @endpoint Criar um novo estudante
     * @authenticated
     * @bodyParam user_id integer required ID do usuário associado
     * @bodyParam student_number string required Número do estudante
     * @bodyParam first_name string required Primeiro nome
     * @bodyParam last_name string required Último nome
     * @bodyParam date_of_birth date required Data de nascimento
     * @bodyParam gender string required Gênero (M/F)
     * @bodyParam phone string Telefone
     * @bodyParam address string Endereço
     * @bodyParam enrollment_date date required Data de matrícula
     * @bodyParam parent_name string Nome do responsável
     * @bodyParam parent_phone string Telefone do responsável
     * @bodyParam parent_email string Email do responsável
     * @bodyParam emergency_contact string Contato de emergência
     * @bodyParam emergency_phone string Telefone de emergência
     * @bodyParam profile_picture string URL da foto de perfil
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id|unique:students,user_id',
            'student_number' => 'required|string|max:20|unique:students',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:M,F',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'enrollment_date' => 'required|date',
            'parent_name' => 'nullable|string|max:200',
            'parent_phone' => 'nullable|string|max:20',
            'parent_email' => 'nullable|email|max:255',
            'emergency_contact' => 'nullable|string|max:200',
            'emergency_phone' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|string|max:255',
        ]);

        $student = Student::create($validated);
        return response()->json($student, 201);
    }

    /**
     * @endpoint Mostrar um estudante específico
     * @authenticated
     */
    public function show($id)
    {
        $student = Student::with('user')->findOrFail($id);
        return response()->json($student, 200);
    }

    /**
     * @endpoint Atualizar um estudante
     * @authenticated
     * @bodyParam student_number string Número do estudante
     * @bodyParam first_name string Primeiro nome
     * @bodyParam last_name string Último nome
     * @bodyParam date_of_birth date Data de nascimento
     * @bodyParam gender string Gênero (M/F)
     * @bodyParam phone string Telefone
     * @bodyParam address string Endereço
     * @bodyParam enrollment_date date Data de matrícula
     * @bodyParam parent_name string Nome do responsável
     * @bodyParam parent_phone string Telefone do responsável
     * @bodyParam parent_email string Email do responsável
     * @bodyParam emergency_contact string Contato de emergência
     * @bodyParam emergency_phone string Telefone de emergência
     * @bodyParam profile_picture string URL da foto de perfil
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $validated = $request->validate([
            'student_number' => 'string|max:20|unique:students,student_number,'.$id,
            'first_name' => 'string|max:100',
            'last_name' => 'string|max:100',
            'date_of_birth' => 'date',
            'gender' => 'in:M,F',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'enrollment_date' => 'date',
            'parent_name' => 'nullable|string|max:200',
            'parent_phone' => 'nullable|string|max:20',
            'parent_email' => 'nullable|email|max:255',
            'emergency_contact' => 'nullable|string|max:200',
            'emergency_phone' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|string|max:255',
        ]);

        $student->update($validated);
        return response()->json($student, 200);
    }

    /**
     * @endpoint Deletar um estudante
     * @authenticated
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json(null, 204);
    }
}
