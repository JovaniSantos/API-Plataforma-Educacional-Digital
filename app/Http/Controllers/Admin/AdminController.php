<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Administradores
 * API para gerenciamento de administradores
 */
class AdminController extends Controller
{
    /**
     * @endpoint Listar todos os administradores
     * @authenticated
     */
    public function index()
    {
        $admins = Admin::with('user')->get();
        return response()->json($admins, 200);
    }

    /**
     * @endpoint Criar um novo administrador
     * @authenticated
     * @bodyParam user_id integer required ID do usuário associado
     * @bodyParam first_name string required Primeiro nome
     * @bodyParam last_name string required Último nome
     * @bodyParam phone string Telefone
     * @bodyParam role string Papel do administrador
     * @bodyParam permissions json Permissões do administrador
     * @bodyParam profile_picture string URL da foto de perfil
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id|unique:admins,user_id',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'role' => 'nullable|string|max:100',
            'permissions' => 'nullable|json',
            'profile_picture' => 'nullable|string|max:255',
        ]);

        $admin = Admin::create($validated);
        return response()->json($admin, 201);
    }

    /**
     * @endpoint Mostrar um administrador específico
     * @authenticated
     */
    public function show($id)
    {
        $admin = Admin::with('user')->findOrFail($id);
        return response()->json($admin, 200);
    }

    /**
     * @endpoint Atualizar um administrador
     * @authenticated
     * @bodyParam first_name string Primeiro nome
     * @bodyParam last_name string Último nome
     * @bodyParam phone string Telefone
     * @bodyParam role string Papel do administrador
     * @bodyParam permissions json Permissões do administrador
     * @bodyParam profile_picture string URL da foto de perfil
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $validated = $request->validate([
            'first_name' => 'string|max:100',
            'last_name' => 'string|max:100',
            'phone' => 'nullable|string|max:20',
            'role' => 'nullable|string|max:100',
            'permissions' => 'nullable|json',
            'profile_picture' => 'nullable|string|max:255',
        ]);

        $admin->update($validated);
        return response()->json($admin, 200);
    }

    /**
     * @endpoint Deletar um administrador
     * @authenticated
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return response()->json(null, 204);
    }
}
