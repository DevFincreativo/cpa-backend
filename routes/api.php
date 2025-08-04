<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NoticiasController;
use App\Http\Controllers\API\WebController;
use App\Http\Controllers\API\ProductoController;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\BannerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('noticias', NoticiasController::class);
Route::apiResource('banner', BannerController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('categorias', CategoriaController::class);


Route::get('producto/{slug}', [ProductoController::class, 'showSlug']);
Route::get('noticia/{slug}', [NoticiasController::class, 'showSlug']);



Route::post('contacto', [WebController::class, 'store']);
Route::post('buzon', [WebController::class, 'buzon']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
