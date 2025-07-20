<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Configurações do Sistema
 * API para gerenciamento de configurações do sistema
 */
class SystemSettingController extends Controller
{
    /**
     * @endpoint Listar todas as configurações do sistema
     * @authenticated
     */
    public function index()
    {
        $settings = SystemSetting::all();
        return response()->json($settings, 200);
    }

    /**
     * @endpoint Criar uma nova configuração do sistema
     * @authenticated
     * @bodyParam setting_key string required Chave da configuração
     * @bodyParam setting_value string required Valor da configuração
     * @bodyParam description string Descrição
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'setting_key' => 'required|string|max:100|unique:system_settings',
            'setting_value' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $setting = SystemSetting::create($validated);
        return response()->json($setting, 201);
    }

    /**
     * @endpoint Mostrar uma configuração específica
     * @authenticated
     */
    public function show($id)
    {
        $setting = SystemSetting::findOrFail($id);
        return response()->json($setting, 200);
    }

    /**
     * @endpoint Atualizar uma configuração
     * @authenticated
     * @bodyParam setting_key string Chave da configuração
     * @bodyParam setting_value string Valor da configuração
     * @bodyParam description string Descrição
     */
    public function update(Request $request, $id)
    {
        $setting = SystemSetting::findOrFail($id);
        $validated = $request->validate([
            'setting_key' => 'string|max:100|unique:system_settings,setting_key,'.$id,
            'setting_value' => 'string',
            'description' => 'nullable|string',
        ]);

        $setting->update($validated);
        return response()->json($setting, 200);
    }

    /**
     * @endpoint Deletar uma configuração
     * @authenticated
     */
    public function destroy($id)
    {
        $setting = SystemSetting::findOrFail($id);
        $setting->delete();
        return response()->json(null, 204);
    }
}
