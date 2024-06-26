<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Soundify Audio Steganography'
        ];

        return view('landing', ['data' => $data]);
    }

    public function team()
    {
        $data = [
            'title' => 'Our Team | Soundify Audio Steganography'
        ];

        return view('team', ['data' => $data]);
    }
}

