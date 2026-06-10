<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAuthPlanoClientesTable extends Migration
{
    public function up()
    {
        $fields = [
            'senha' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'email',
            ],
            'plano' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
                'after'      => 'moagem',
            ],
            'plano_ativo' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
                'after'      => 'plano',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ];

        $this->forge->addColumn('clientes', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('clientes', 'senha');
        $this->forge->dropColumn('clientes', 'plano');
        $this->forge->dropColumn('clientes', 'plano_ativo');
        $this->forge->dropColumn('clientes', 'created_at');
        $this->forge->dropColumn('clientes', 'updated_at');
    }
}