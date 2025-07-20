<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Escolas
 * API para gerenciamento de escolas
 */
class SchoolController extends Controller
{
    /**
     * @endpoint Listar todas as escolas
     * @authenticated
     */
    public function index()
    {
        $schools = School::all();
        return response()->json($schools, 200);
    }

    /**
     * @endpoint Criar uma nova escola
     * @authenticated
     * @bodyParam name string required Nome da escola
     * @bodyParam code string required Código único da escola
     * @bodyParam address string required Endereço
     * @bodyParam phone string Telefone
     * @bodyParam email string Email
     * @bodyParam principal_name string Nome do diretor
     * @bodyParam established_date date Data de fundação
     * @bodyParam status string Status (active/inactive)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:schools',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'principal_name' => 'nullable|string|max:200',
            'established_date' => 'nullable|date',
            'status' => 'nullable|in:active,inactive',
        ]);

        $school = School::create($validated);
        return response()->json($school, 201);
    }

    /**
     * @endpoint Mostrar uma escola específica
     * @authenticated
     */
    public function show($id)
    {
        $school = School::findOrFail($id);
        return response()->json($school, 200);
    }

    /**
     * @endpoint Atualizar uma escola
     * @authenticated
     * @bodyParam name string Nome da escola
     * @bodyParam code string Código único da escola
     * @bodyParam address string Endereço
     * @bodyParam phone string Telefone
     * @bodyParam email string Email
     * @bodyParam principal_name string Nome do diretor
     * @bodyParam established_date date Data de fundação
     * @bodyParam status string Status (active/inactive)
     */
    public function update(Request $request, $id)
    {
        $school = School::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string|max:255',
            'code' => 'string|max:20|unique:schools,code,'.$id,
            'address' => 'string',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'principal_name' => 'nullable|string|max:200',
            'established_date' => 'nullable|date',
            'status' => 'nullable|in:active,inactive',
        ]);

        $school->update($validated);
        return response()->json($school, 200);
    }

    /**
     * @endpoint Deletar uma escola
     * @authenticated
     */
    public function destroy($id)
    {
        $school = School::findOrFail($id);
        $school->delete();
        return response()->json(null, 204);
    }
}
