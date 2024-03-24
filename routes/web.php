<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador Artículo
Route::get('articulo', [ArticuloController::class, 'index'])->name('articulo.index');
Route::post('articulo', [ArticuloController::class, 'create'])->name('articulo.create');
Route::get('articulo/eliminar/{id}', [ArticuloController::class, 'destroy'])->name('articulo.destroy');
Route::get('articulo/editar/{id}', [ArticuloController::class, 'edit'])->name('articulo.edit');
Route::post('articulo/actualizar/{id}', [ArticuloController::class, 'update'])->name('articulo.update');
