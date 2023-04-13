<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class developSeeder extends Seeder
{
    public function run()
    {
        // ini user
        $data = [
            [
                'username' => 'riqqi',
                'password' => password_hash('riqqi', PASSWORD_DEFAULT),
                'tingkatan'   => 'penyetor',
                'alamat' => 'jl. raya',
                'no_hp' => '081234567890',
                'email' => 'iniRiqqiEmail',
                'saldo' => 200000,
            ],
            [
                'username' => 'riza',
                'password' => password_hash('riza', PASSWORD_DEFAULT),
                'tingkatan'   => 'pemulung',
                'alamat' => 'jl. raya',
                'no_hp' => '081234567890',
                'email' => 'iniRizaEmail',
                'saldo' => 0,
            ],
            [
                'username' => 'riski',
                'password' => password_hash('riski', PASSWORD_DEFAULT),
                'tingkatan'   => 'pemulung',
                'alamat' => 'jl. raya',
                'no_hp' => '081234567890',
                'email' => 'iniRiskiEmail',
                'saldo' => 0,
            ]
        ];

        // Using Query Builder
        $this->db->table('user')->insertBatch($data);

        // ini data tabel sampah
        $data1 = [
            [
                'kategori_botol' => 'kecil',
                'nominal' => 1000,
                'margin' => 100,
            ],
            [
                'kategori_botol' => 'sedang',
                'nominal' => 2000,
                'margin' => 200,
            ],
            [
                'kategori_botol' => 'besar',
                'nominal' => 3000,
                'margin' => 300,
            ],
            [
                'kategori_botol' => 'gelas',
                'nominal' => 500,
                'margin' => 50,
            ]
        ];
        $this->db->table('sampah')->insertBatch($data1);

        // ini data tabel 
    }
}
