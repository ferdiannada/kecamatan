<?php

namespace App\Controllers\admin;

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
        // cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('/');
        }
        return view('admin/content');
    }
}
