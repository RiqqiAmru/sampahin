<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenyerahanSampah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'penyerahan_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tgl' => [
                'type'       => 'DATETIME',
            ],
            'pelanggan_id' => [
                'type'       => 'INT',
            ],
            'pemulung_id' => [
                'type'       => 'INT',
            ],
            'ket' => [
                'type'       => 'VARCHAR',
                'constraint'    => 20
            ],
            'gt_nominal' => [
                'type'       => 'INT',
            ],
            'gt_margin' => [
                'type'       => 'INT',
            ],
        ]);
        $this->forge->addKey('penyerahan_id', true);
        $this->forge->addForeignKey('pelanggan_id', 'user', 'user_id', '', '', 'penyerahan_pelanggan');
        $this->forge->addForeignKey('pemulung_id', 'user', 'user_id', '', '', 'penyerahan_pemulung');
        $this->forge->createTable('penyerahan');
    }

    public function down()
    {
        $this->forge->dropTable('penyerahan');
    }
}
