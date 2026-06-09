<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCamposQuizClientesTable extends Migration
{
    public function up()
    {
        $fields = [
            'metodo_preparo' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
                'after' => 'perfil'
            ],
            'forma_envio' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'after' => 'metodo_preparo'
            ],
            'moagem' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'after' => 'forma_envio'
            ],
        ];

        $this->forge->addColumn('clientes', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('clientes', 'metodo_preparo');
        $this->forge->dropColumn('clientes', 'forma_envio');
        $this->forge->dropColumn('clientes', 'moagem');
    }
}