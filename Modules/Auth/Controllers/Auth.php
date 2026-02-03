<?php

namespace Modules\Auth\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        // Memanggil login.php di dalam ciews
        return view('Modules\Auth\Views\index');
    }

    public function process()
    {
        // logic validasi username dan passowrd user
        return redirect()->to('/admin');
    }
}