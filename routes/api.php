<?php
use App\Http\Controllers\ProyectoController;

Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
Route::post('/proyectos', [ProyectoController::class, 'store']);
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);
