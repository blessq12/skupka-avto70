<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $data = (object) [
            'name' => 'Выкуп авто в Томске',
            'description' => 'Быстро. Выгодно. Удобно',
            'heroBanner' => '/assets/images/banner.jpg',
            'logo' => '/assets/images/logo.png',
            'phone' => '+7 (913) 853-03-90',
            'waLink' => '//wa.me/79138530390'
        ];

        return view('index',[
            'data' => $data
        ]);
    }
}
