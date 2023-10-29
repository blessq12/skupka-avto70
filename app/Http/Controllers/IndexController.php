<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $data = (object) [
            'name' => 'Выкуп в томске',
            'description' => 'Авто и техника',
            'heroBanner' => '/assets/images/banner.jpg',
            'logo' => '//via.placeholder.com/256x256',
            'phone' => '+7 (913) 853-03-90',
            'waLink' => '//wa.me/79138530390'
        ];

        return view('index',[
            'data' => $data
        ]);
    }
}
