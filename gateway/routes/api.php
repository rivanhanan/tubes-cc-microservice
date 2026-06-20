<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| PROJECT SERVICE - CATEGORIES
|--------------------------------------------------------------------------
*/

Route::get('/project/categories', function () {
    return Http::get(
        'http://project-service:8000/api/categories'
    )->json();
});

/*
|--------------------------------------------------------------------------
| PROJECT SERVICE - MENUS
|--------------------------------------------------------------------------
*/

Route::get('/project/menus', function () {
    return Http::get(
        'http://project-service:8000/api/menus'
    )->json();
});

Route::post('/project/menus', function (Request $request) {
    return Http::acceptJson()
        ->post(
            'http://project-service:8000/api/menus',
            $request->all()
        )
        ->json();
});

Route::put('/project/menus/{id}', function (Request $request, $id) {
    return Http::acceptJson()
        ->put(
            "http://project-service:8000/api/menus/$id",
            $request->all()
        )
        ->json();
});

Route::delete('/project/menus/{id}', function ($id) {
    return Http::delete(
        "http://project-service:8000/api/menus/$id"
    )->json();
});

/*
|--------------------------------------------------------------------------
| PROJECT SERVICE - RECIPES
|--------------------------------------------------------------------------
*/

Route::get('/project/recipes', function () {
    return Http::get(
        'http://project-service:8000/api/recipes'
    )->json();
});

Route::post('/project/recipes', function (Request $request) {
    return Http::acceptJson()
        ->post(
            'http://project-service:8000/api/recipes',
            $request->all()
        )
        ->json();
});

Route::put('/project/recipes/{id}', function (Request $request, $id) {
    return Http::acceptJson()
        ->put(
            "http://project-service:8000/api/recipes/$id",
            $request->all()
        )
        ->json();
});

Route::delete('/project/recipes/{id}', function ($id) {
    return Http::delete(
        "http://project-service:8000/api/recipes/$id"
    )->json();
});