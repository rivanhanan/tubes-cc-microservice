<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // READ
    public function index()
    {
        return Category::all();
    }

    // CREATE
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($category, 201);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($category);
    }

    // DELETE
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Category deleted successfully'
        ]);
    }
}