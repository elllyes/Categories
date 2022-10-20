<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class CategoryController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('guest');
    }


   
    protected function store()
     {
            $attributes = request()->validate([ 
                'name' => ['required', 'string', 'max:255'],
                'short_description' => ['present','required'],
                'long_description' => ['present'],
                'enabled' => ['boolean'],
                'published' => ['boolean']
                ]);
                $attributes['long_description'] = strip_tags($attributes['long_description']);

             Category::create($attributes);
             return view('/done');
        
     }
}
