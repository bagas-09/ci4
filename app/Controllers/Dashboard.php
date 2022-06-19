<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content'    => 'admin/dashboard.php'
        ];
        return view('admin/layout/wrapper', $data);
    }
}
