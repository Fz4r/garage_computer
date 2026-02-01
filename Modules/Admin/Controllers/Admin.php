<?php

namespace Modules\Admin\Controllers; 

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('Modules\Admin\Views\index');
    }
}
