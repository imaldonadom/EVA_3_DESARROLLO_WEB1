<?php

namespace App\Models;

class Usuario
{
    public static $usuarios = [
        [
            'id' => 1,
            'nombre' => 'Ignacio',
            'email' => 'ignacio@example.com',
            'password' => '123456', // plano por ahora
        ],
        [
            'id' => 2,
            'nombre' => 'Camila',
            'email' => 'camila@example.com',
            'password' => 'secreto',
        ],
    ];

    public static function buscarPorEmail($email)
    {
        return collect(self::$usuarios)->firstWhere('email', $email);
    }

    public static function todos()
    {
        return self::$usuarios;
    }
}
