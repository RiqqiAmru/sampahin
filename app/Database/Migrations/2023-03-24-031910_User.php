<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usesr extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'auto_increment' => true,
                'constraint'    => 11
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tingkatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '14',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'saldo' => [
                'type'       => 'INT',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
