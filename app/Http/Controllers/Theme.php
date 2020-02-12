<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Theme extends Controller
{
    //
    function index(){
        return view('homepage');
    }
    function element(){
        return view('about');
    }
    function generic(){
        return view('generic');
    }
}
