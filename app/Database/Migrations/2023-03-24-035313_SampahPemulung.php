<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SampahPemulung extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pemulung_id' => [
                'type'           => 'INT',
            ],
            'sampah_id' => [
                'type'           => 'INT',
            ],
            'total' => [
                'type'       => 'INT',
            ],
        ]);
        $this->forge->addForeignKey('sampah_id', 'sampah', 'sampah_id', '', '', 'id_sampah_di_gudang_pemulung');
        $this->forge->addForeignKey('pemulung_id', 'pemulung', 'pemulung_id', '', '', 'id_pemulung_di_gudang_pemulung');
        $this->forge->createTable('sampah_pemulung');
    }

    public function down()
    {
        $this->forge->dropTable('sampah_pemulung');
    }
}
