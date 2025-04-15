<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        //definir usuario admin
        $usuarios = [
         [
            'usuario' => 'admin',
            'senha' => password_hash('admin', PASSWORD_DEFAULT),
        
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'deleted_at' => null
         ],
         [
            'usuario' => 'user1',
            'senha' => password_hash('user1', PASSWORD_DEFAULT),
        
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'deleted_at' => null
         ],
         [
            'usuario' => 'user2',
            'senha' => password_hash('user2', PASSWORD_DEFAULT),
        
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'deleted_at' => null
         ],
        
    ];
        //inserir dados na tabela
        $this->db->table('usuarios')->insertBatch($usuarios);
        

    }
}
