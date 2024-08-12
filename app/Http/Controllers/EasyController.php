<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EasyController extends Controller
{
    public function home(){
        return view('home');
    }
    public function hnavbar(){
        return view('hnavbar');
    }
    public function footer(){
        return view('footer');
    }
    public function register(){
        return view('register');
    }
    public function available(){
        return view('available');
    }
    public function addroom(){
        return view('addroom');
    }

}