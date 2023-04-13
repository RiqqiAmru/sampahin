<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'isi' => 'dashboard',
        ];

        if (session()->get('tingkatan') == 'penyetor') {
            //ambil saldo penyetor
            $model = new \App\Models\UserModel();
            $user = $model->where('username', session()->get('username'))
                ->first();
            $data['user'] = $user;
            return view('penyetor/index', $data);
        }
    }
}
