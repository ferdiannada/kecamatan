<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('admin/register');
    }
}
