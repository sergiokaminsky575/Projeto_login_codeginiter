<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        //chave primária
        $this->forge->addKey('id', true);
        //criando a tabela
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        // comando para remover table
        $this->forge->dropTable('usuarios');
    }
}
