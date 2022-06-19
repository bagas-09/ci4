<?php

namespace App\Controllers;

use App\Models\MEvent;

class Home extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->MEvent = new MEvent();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'allData' => $this->MEvent->allData(),
            'content'    => 'user/home.php'
        ];
        return view('user/layout/wrapper', $data);
    }
}
