<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function contact(){
        return view('contact');
    }
    function about(){
        return view('about');
    }
}
