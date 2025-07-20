<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Professores
 * API para gerenciamento de professores
 */
class TeacherController extends Controller
{
    /**
     * @endpoint Listar todos os professores
     * @authenticated
     */
    public function index()
    {
        $teachers = Teacher::with('user')->get();
        return response()->json($teachers, 200);
    }

    /**
     * @endpoint Criar um novo professor
     * @authenticated
     * @bodyParam user_id integer required ID do usuário associado
     * @bodyParam teacher_number string required Número do professor
     * @bodyParam first_name string required Primeiro nome
     * @bodyParam last_name string required Último nome
     * @bodyParam date_of_birth date required Data de nascimento
     * @bodyParam gender string required Gênero (M/F)
     * @bodyParam phone string Telefone
     * @bodyParam address string Endereço
     * @bodyParam hire_date date required Data de contratação
     * @bodyParam qualification string Qualificação
     * @bodyParam specialization string Especialização
     * @bodyParam experience_years integer Anos de experiência
     * @bodyParam salary float Salário
     * @bodyParam profile_picture string URL da foto de perfil
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id|unique:teachers,user_id',
            'teacher_number' => 'required|string|max:20|unique:teachers',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:M,F',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'hire_date' => 'required|date',
            'qualification' => 'nullable|string|max:255',
            'specialization' => 'nullable|string|max:255',
            'experience_years' => 'nullable|integer|min:0',
            'salary' => 'nullable|numeric',
            'profile_picture' => 'nullable|string|max:255',
        ]);

        $teacher = Teacher::create($validated);
        return response()->json($teacher, 201);
    }

    /**
     * @endpoint Mostrar um professor específico
     * @authenticated
     */
    public function show($id)
    {
        $teacher = Teacher::with('user')->findOrFail($id);
        return response()->json($teacher, 200);
    }

    /**
     * @endpoint Atualizar um professor
     * @authenticated
     * @bodyParam teacher_number string Número do professor
     * @bodyParam first_name string Primeiro nome
     * @bodyParam last_name string Último nome
     * @bodyParam date_of_birth date Data de nascimento
     * @bodyParam gender string Gênero (M/F)
     * @bodyParam phone string Telefone
     * @bodyParam address string Endereço
     * @bodyParam hire_date date Data de contratação
     * @bodyParam qualification string Qualificação
     * @bodyParam specialization string Especialização
     * @bodyParam experience_years integer Anos de experiência
     * @bodyParam salary float Salário
     * @bodyParam profile_picture string URL da foto de perfil
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $validated = $request->validate([
            'teacher_number' => 'string|max:20|unique:teachers,teacher_number,'.$id,
            'first_name' => 'string|max:100',
            'last_name' => 'string|max:100',
            'date_of_birth' => 'date',
            'gender' => 'in:M,F',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'hire_date' => 'date',
            'qualification' => 'nullable|string|max:255',
            'specialization' => 'nullable|string|max:255',
            'experience_years' => 'nullable|integer|min:0',
            'salary' => 'nullable|numeric',
            'profile_picture' => 'nullable|string|max:255',
        ]);

        $teacher->update($validated);
        return response()->json($teacher, 200);
    }

    /**
     * @endpoint Deletar um professor
     * @authenticated
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return response()->json(null, 204);
    }
}
