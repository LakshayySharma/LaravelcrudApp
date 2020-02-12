<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Template extends Controller
{
    //
    function home(){
        return view('home');
    }
    function edit(){
        return view();
    }
    function about(){
        $values = ['abc','xyz',1,2];
        //return view('about',compact('values'));
        //return view('about')->withData($values);
        return view('about')->with('savedata',$values);
    }
}
