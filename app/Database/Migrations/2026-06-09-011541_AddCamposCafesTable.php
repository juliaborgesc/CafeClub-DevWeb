<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCamposCafesTable extends Migration
{
    public function up()
    {
        $fields = [
            'torra' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'null'       => true,
                'after'      => 'perfil',
            ],
            'forma_envio' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
                'after'      => 'torra',
            ],
            'moagem' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
                'after'      => 'forma_envio',
            ],
        ];

        $this->forge->addColumn('cafes', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('cafes', 'torra');
        $this->forge->dropColumn('cafes', 'forma_envio');
        $this->forge->dropColumn('cafes', 'moagem');
    }
}
