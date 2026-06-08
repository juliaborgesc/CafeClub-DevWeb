<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPerfilClientesTable extends Migration
{
    public function up()
    {
        $fields = [
            'perfil' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true
            ]
        ];

        $this->forge->addColumn('clientes', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('clientes', 'perfil');
    }
}