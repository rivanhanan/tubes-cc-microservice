<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::with('menu')->get();
    }

    public function store(Request $request)
    {
        return Recipe::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $recipe->update($request->all());

        return response()->json([
            'message' => 'Recipe berhasil diupdate',
            'data' => $recipe
        ]);
    }

    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        $recipe->delete();

        return response()->json([
            'message' => 'Recipe berhasil dihapus'
        ]);
    }
}