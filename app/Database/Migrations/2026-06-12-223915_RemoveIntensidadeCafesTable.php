<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveIntensidadeCafesTable extends Migration
{
    public function up()
    {
        if ($this->db->fieldExists('intensidade', 'cafes')) {
            $this->forge->dropColumn('cafes', 'intensidade');
        }
    }

    public function down()
    {
        if (! $this->db->fieldExists('intensidade', 'cafes')) {
            $this->forge->addColumn('cafes', [
                'intensidade' => [
                    'type'       => 'INT',
                    'constraint' => 2,
                    'null'       => true,
                    'after'      => 'torra',
                ],
            ]);
        }
    }
}
