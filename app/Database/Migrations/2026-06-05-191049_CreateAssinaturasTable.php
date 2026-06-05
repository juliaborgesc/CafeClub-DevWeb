<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAssinaturasTable extends Migration
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
            'cliente_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'plano_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'data_inicio' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'cliente_id',
            'clientes',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'plano_id',
            'planos',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('assinaturas');
    }

    public function down()
    {
        $this->forge->dropTable('assinaturas');
    }
}