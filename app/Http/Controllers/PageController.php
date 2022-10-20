<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        
        return view('welcome');
    }

    public function create(){

        return view('create');
        }
    public function done(){

    return view('done');
    }
}
