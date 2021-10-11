<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        // cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/sadmin/login');
        }
        return view('admin/content');
    }
}
