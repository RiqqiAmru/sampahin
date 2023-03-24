<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengelola extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'nama_perusahaan' => [
                'type'           => 'VARCHAR',
                'constraint'   => 50
            ],
            'alamat' => [
                'type'           => 'VARCHAR',
                'constraint'   => 50
            ],
            'saldo' => [
                'type'       => 'INT',
            ],

        ]);
        $this->forge->createTable('pengelola');
    }

    public function down()
    {
        $this->forge->dropTable('pengelola');
    }
}
