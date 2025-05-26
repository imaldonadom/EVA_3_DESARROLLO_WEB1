<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;

// Rutas para proyectos
Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::post('/proyectos', [ProyectoController::class, 'store']);
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);

Route::get('/test', function () {
    return response()->json(['ok' => true]);
});
// Ruta de login
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas (más adelante puedes probarlas con Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/usuario', function (Request $request) {
        return response()->json($request->user());
    });
});

// Rutas de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
