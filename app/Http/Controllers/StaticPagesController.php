<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return '主页';
    }
    public function help(){
        return '帮助页';
    }
    public function about(){
        return '关于页';
    }
    //////////////////////
    public function homing(){
        return view('static_pages/homing');
    }
    public function helping(){
        return view('static_pages/helping');
    }
    public function regarding(){
        return view('static_pages/regarding');
    }

    // public function home(){
    //     return view('static_pages/home');
    // }
    // public function help(){
    //     return view('static_pages/help');
    // }
    // public function about(){
    //     return view('static_pages/about');
    // }
}
