<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GudangSampah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'sampah_id' => [
                'type'           => 'INT',
            ],
            'total' => [
                'type'           => 'INT',
            ],
        ]);
        $this->forge->addForeignKey('sampah_id', 'sampah', 'sampah_id', '', '', 'id_sampah_di_gudang_pengelola');
        $this->forge->createTable('gudang_sampah');
    }

    public function down()
    {
        $this->forge->dropTable('gudang_sampah');
    }
}
