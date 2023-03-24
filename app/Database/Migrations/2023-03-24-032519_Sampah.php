<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sampah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'sampah_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kategori_botol' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'nominal' => [
                'type'       => 'INT',
            ],
            'margin' => [
                'type'       => 'INT',
            ],
        ]);
        $this->forge->addKey('sampah_id', true);
        $this->forge->createTable('sampah');
    }

    public function down()
    {
        $this->forge->dropTable('sampah');
    }
}
