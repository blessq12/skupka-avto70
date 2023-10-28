<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $data = (object) [
            'name' => 'Выкуп в томске',
            'description' => 'Авто и техника',
            'heroBanner' => '//via.placeholder.com/1920x1080',
            'logo' => '//via.placeholder.com/256x256',
            'phone' => '+7(999)999-99-99',
            'waLink' => '//wa.me/79998889988'
        ];

        return view('index',[
            'data' => $data
        ]);
    }
}
