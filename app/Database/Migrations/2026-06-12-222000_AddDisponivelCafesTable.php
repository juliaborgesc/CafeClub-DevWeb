<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDisponivelCafesTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('cafes', [
            'disponivel' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
                'after'      => 'moagem',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('cafes', 'disponivel');
    }
}
