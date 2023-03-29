<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//membuat login untuk 3 user, kemudian di arahkan ke laman dashboard yang berbeda
class Login extends BaseController
{
    public function index()
    {
    }
    public function pengelola()
    {
        $data = [
            'title' => 'login'
        ];
        return view('login/pengelola', $data);
    }

    public function masuk()
    {
        $user = $this->request->getVar('username');
        $pass = $this->request->getVar('password');

        echo 'user = ' . $user;
        echo 'pass = ' . $pass;
    }
}
