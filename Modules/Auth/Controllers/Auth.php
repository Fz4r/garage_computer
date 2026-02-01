<?php

namespace Modules\Auth\Controllers; 

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('Modules\Auth\Views\index');
    }
}
