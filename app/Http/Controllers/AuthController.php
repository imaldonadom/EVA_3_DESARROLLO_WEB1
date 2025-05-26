<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $credenciales = $request->only(['email', 'password']);

        $usuario = Usuario::buscarPorEmail($credenciales['email']);

        if (!$usuario || $usuario['password'] !== $credenciales['password']) {
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }

        // Token ficticio por ahora
        $token = base64_encode($usuario['email'] . '|' . now());

        return response()->json([
            'usuario' => $usuario,
            'token' => $token,
        ]);
    }
}
