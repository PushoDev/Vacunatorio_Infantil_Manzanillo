<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuarios = [
            [
                'nombre' => "Luis Alberto",
                'apellidos' => "Guisado",
                'usuario' => "pusho.dev",
                'password' => password_hash("guisa290", PASSWORD_DEFAULT),
                'email' => "bethocubans1990@gmail.com",
                'foto_user' => "Imagen.jpg",
                'type' => "administrador"
            ],
            [
                'nombre' => "Usuario1",
                'apellidos' => "Especial",
                'usuario' => "user",
                'password' => password_hash("1234", PASSWORD_DEFAULT),
                'email' => "example@pusho.dev",
                'foto_user' => "Imagen1.jpg",
                'type' => "usuario"
            ]
        ];

        // Usar la Tabla T_Usuarios
        $this->db->table('t_usuarios')->insertBatch($usuarios);
    }
}
