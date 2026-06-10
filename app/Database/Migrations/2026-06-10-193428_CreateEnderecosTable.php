<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEnderecosTable extends Migration
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
            'cep' => [
                'type' => 'VARCHAR',
                'constraint' => 9,
            ],
            'rua' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'numero' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'bairro' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'estado' => [
                'type' => 'CHAR',
                'constraint' => 2,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
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

        $this->forge->createTable('enderecos');
    }

    public function down()
    {
        $this->forge->dropTable('enderecos');
    }
}