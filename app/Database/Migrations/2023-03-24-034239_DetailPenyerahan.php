<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPenyerahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'penyerahan_id' => [
                'type'           => 'INT',
            ],
            'sampah_id' => [
                'type'           => 'INT',
            ],
            'jumlah' => [
                'type'       => 'INT',
            ],
            'total_nominal' => [
                'type'       => 'INT',
            ],
            'total_margin' => [
                'type'       => 'INT',
            ],

        ]);
        $this->forge->addForeignKey('penyerahan_id', 'penyerahan', 'penyerahan_id', '', '', 'penyerahan_id');
        $this->forge->addForeignKey('sampah_id', 'sampah', 'sampah_id', '', '', 'sampah_id');
        $this->forge->createTable('detail_penyerahan');
    }

    public function down()
    {
        $this->forge->dropTable('detail_penyerahan');
    }
}
