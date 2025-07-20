<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ForumCategory;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Authenticated;

/**
 * @group Categorias de Fórum
 * API para gerenciamento de categorias de fórum
 */
class ForumCategoryController extends Controller
{
    /**
     * @endpoint Listar todas as categorias de fórum
     * @authenticated
     */
    public function index()
    {
        $categories = ForumCategory::all();
        return response()->json($categories, 200);
    }

    /**
     * @endpoint Criar uma nova categoria de fórum
     * @authenticated
     * @bodyParam name string required Nome da categoria
     * @bodyParam description string Descrição
     * @bodyParam status string Status (active/inactive)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'status' => 'nullable|in:active,inactive',
        ]);

        $category = ForumCategory::create($validated);
        return response()->json($category, 201);
    }

    /**
     * @endpoint Mostrar uma categoria específica
     * @authenticated
     */
    public function show($id)
    {
        $category = ForumCategory::findOrFail($id);
        return response()->json($category, 200);
    }

    /**
     * @endpoint Atualizar uma categoria
     * @authenticated
     * @bodyParam name string Nome da categoria
     * @bodyParam description string Descrição
     * @bodyParam status string Status (active/inactive)
     */
    public function update(Request $request, $id)
    {
        $category = ForumCategory::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string|max:100',
            'description' => 'nullable|string',
            'status' => 'nullable|in:active,inactive',
        ]);

        $category->update($validated);
        return response()->json($category, 200);
    }

    /**
     * @endpoint Deletar uma categoria
     * @authenticated
     */
    public function destroy($id)
    {
        $category = ForumCategory::findOrFail($id);
        $category->delete();
        return response()->json(null, 204);
    }
}
