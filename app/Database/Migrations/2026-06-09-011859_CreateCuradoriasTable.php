<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCuradoriasTable extends Migration
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

            'mes_referencia' => [
                'type' => 'VARCHAR',
                'constraint' => 7,
            ],

            'perfil' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],

            'cafe_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'ordem' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'cafe_id',
            'cafes',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('curadorias');
    }

    public function down()
    {
        $this->forge->dropTable('curadorias');
    }
}