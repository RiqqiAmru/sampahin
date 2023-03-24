<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penarikan extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'tgl' => [
                'type'           => 'DATETIME',
            ],
            'user_id' => [
                'type'       => 'INT',
            ],
            'penarikan' => [
                'type'       => 'INT',
            ],
            'saldo' => [
                'type'       => 'INT',
            ],

        ]);
        $this->forge->addForeignKey('user_id', 'user', 'user_id', '', '', 'user_penarikan');
        $this->forge->createTable('penarikan');
    }

    public function down()
    {
        $this->forge->dropTable('penarikan');
    }
}
