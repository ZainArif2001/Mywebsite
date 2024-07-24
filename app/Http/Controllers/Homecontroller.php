<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function Home(){
        return view('index');
    }

    public function Contact(){
        return view('conteact');
    }
}
