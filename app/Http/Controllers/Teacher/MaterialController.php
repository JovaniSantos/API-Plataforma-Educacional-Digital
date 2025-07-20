<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Materiais
 * API para gerenciamento de materiais
 */
class MaterialController extends Controller
{
    /**
     * @endpoint Listar todos os materiais
     * @authenticated
     */
    public function index()
    {
        $materials = Material::with(['subject', 'class', 'uploadedBy'])->get();
        return response()->json($materials, 200);
    }

    /**
     * @endpoint Criar um novo material
     * @authenticated
     * @bodyParam title string required Título do material
     * @bodyParam description string Descrição
     * @bodyParam file_path string required Caminho do arquivo
     * @bodyParam file_type string required Tipo de arquivo (pdf/doc/video/image/other)
     * @bodyParam subject_id integer required ID da disciplina
     * @bodyParam class_id integer required ID da turma
     * @bodyParam uploaded_by integer required ID do professor que enviou
     * @bodyParam status string Status (active/archived)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|string',
            'file_type' => 'required|in:pdf,doc,video,image,other',
            'subject_id' => 'required|exists:subjects,id',
            'class_id' => 'required|exists:classes,id',
            'uploaded_by' => 'required|exists:teachers,id',
            'status' => 'nullable|in:active,archived',
        ]);

        $material = Material::create($validated);
        return response()->json($material, 201);
    }

    /**
     * @endpoint Mostrar um material específico
     * @authenticated
     */
    public function show($id)
    {
        $material = Material::with(['subject', 'class', 'uploadedBy'])->findOrFail($id);
        return response()->json($material, 200);
    }

    /**
     * @endpoint Atualizar um material
     * @authenticated
     * @bodyParam title string Título do material
     * @bodyParam description string Descrição
     * @bodyParam file_path string Caminho do arquivo
     * @bodyParam file_type string Tipo de arquivo (pdf/doc/video/image/other)
     * @bodyParam subject_id integer ID da disciplina
     * @bodyParam class_id integer ID da turma
     * @bodyParam uploaded_by integer ID do professor que enviou
     * @bodyParam status string Status (active/archived)
     */
    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id);
        $validated = $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'string',
            'file_type' => 'in:pdf,doc,video,image,other',
            'subject_id' => 'exists:subjects,id',
            'class_id' => 'exists:classes,id',
            'uploaded_by' => 'exists:teachers,id',
            'status' => 'nullable|in:active,archived',
        ]);

        $material->update($validated);
        return response()->json($material, 200);
    }

    /**
     * @endpoint Deletar um material
     * @authenticated
     */
    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();
        return response()->json(null, 204);
    }
}
