<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditLog;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Logs de Auditoria
 * API para gerenciamento de logs de auditoria
 */
class AuditLogController extends Controller
{
    /**
     * @endpoint Listar todos os logs de auditoria
     * @authenticated
     */
    public function index()
    {
        $logs = AuditLog::with('user')->get();
        return response()->json($logs, 200);
    }

    /**
     * @endpoint Criar um novo log de auditoria
     * @authenticated
     * @bodyParam user_id integer required ID do usuário
     * @bodyParam action string required Ação realizada
     * @bodyParam entity_type string required Tipo de entidade
     * @bodyParam entity_id integer required ID da entidade
     * @bodyParam details object Detalhes adicionais
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'action' => 'required|string|max:100',
            'entity_type' => 'required|string|max:100',
            'entity_id' => 'required|integer',
            'details' => 'nullable|array',
        ]);

        $log = AuditLog::create($validated);
        return response()->json($log, 201);
    }

    /**
     * @endpoint Mostrar um log de auditoria específico
     * @authenticated
     */
    public function show($id)
    {
        $log = AuditLog::with('user')->findOrFail($id);
        return response()->json($log, 200);
    }

    /**
     * @endpoint Atualizar um log de auditoria
     * @authenticated
     * @bodyParam user_id integer ID do usuário
     * @bodyParam action string Ação realizada
     * @bodyParam entity_type string Tipo de entidade
     * @bodyParam entity_id integer ID da entidade
     * @bodyParam details object Detalhes adicionais
     */
    public function update(Request $request, $id)
    {
        $log = AuditLog::findOrFail($id);
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'action' => 'string|max:100',
            'entity_type' => 'string|max:100',
            'entity_id' => 'integer',
            'details' => 'nullable|array',
        ]);

        $log->update($validated);
        return response()->json($log, 200);
    }

    /**
     * @endpoint Deletar um log de auditoria
     * @authenticated
     */
    public function destroy($id)
    {
        $log = AuditLog::findOrFail($id);
        $log->delete();
        return response()->json(null, 204);
    }
}
