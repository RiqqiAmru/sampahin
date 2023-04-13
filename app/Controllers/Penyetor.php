<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penyetor extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new \App\Models\UserModel();
    }

    public function collectSampah()
    {
        //ini nanti nampilih halaman setor sampah milik penyetor (bukan dashboard)
        $data = [
            'title' => 'Setor Sampah',
            'isi' => 'penyetor/collectSampah',
            //ambil data pemulung
            'pemulung' => $this->user->where('tingkatan', 'pemulung')->findAll(),
        ];
        return view('penyetor/collectSampah', $data);
    }

    public function store()
    {
        dd($this->request->getVar());
    }
}
