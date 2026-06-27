<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::with('category')->get();
    }

    public function store(Request $request)
    {
        return Menu::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $menu->update($request->all());

        return response()->json([
            'message' => 'Menu berhasil diupdate',
            'data' => $menu
        ]);
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        $menu->delete();

        return response()->json([
            'message' => 'Menu berhasil dihapus'
        ]);
    }
}