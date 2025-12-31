<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home Page | CI4App',
        ];

        return view('pages/home', $data);
    }
}
