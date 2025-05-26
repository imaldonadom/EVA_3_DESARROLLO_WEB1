<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Usuario::todos(), 200);
    }

    public function show($id): JsonResponse
    {
        $usuario = collect(Usuario::todos())->firstWhere('id', $id);

        if ($usuario) {
            return response()->json($usuario, 200);
        }

        return response()->json(['error' => 'Usuario no encontrado'], 404);
    }
}
