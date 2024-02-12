<?php

use App\Http\Controllers\API\AulaController;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/users', [ApiController::class, 'users']);
// Route::post('/login', [ApiController::class, 'login']);

Route::prefix('aulas')->group(function (){
    Route::get('/', [AulaController::class, 'get']);
    Route::post('/', [AulaController::class, 'create']);
    Route::get('/{id}', [AulaController::class, 'getById']);
    Route::put('/{id}', [AulaController::class, 'update']);
    Route::delete('/{id}', [AulaController::class, 'delete']);
});
