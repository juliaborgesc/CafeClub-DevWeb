<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePlanosTable extends Migration
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
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'descricao' => [
                'type' => 'TEXT',
            ],
            'valor' => [
                'type' => 'DECIMAL',
                'constraint' => '8,2',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('planos');
    }

    public function down()
    {
        $this->forge->dropTable('planos');
    }
}