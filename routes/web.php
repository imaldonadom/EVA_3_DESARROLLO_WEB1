<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::get('/api/proyectos', [ProyectoController::class, 'index']);
Route::get('/api/proyectos/{id}', [ProyectoController::class, 'show']);
