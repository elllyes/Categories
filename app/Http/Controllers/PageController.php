<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function welcome(){
        
        return view('welcome');
    }

    public function create(){

        return view('create');
        }
    
    public function done(){

        return view('done');
    }

    public function show(Request $request)
    {
        return view('show',['categories'=> Category::orderBy("name")->get()]);
    }
}
