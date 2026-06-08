<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCafesTable extends Migration
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
                'constraint' => 100,
            ],

            'origem' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'descricao' => [
                'type' => 'TEXT',
            ],

            'perfil' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('cafes');
    }

    public function down()
    {
        $this->forge->dropTable('cafes');
    }
}