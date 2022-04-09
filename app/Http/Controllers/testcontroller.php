<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\test;

class testcontroller extends Controller
{
    //
    public function index()
    {
        $ab="hi";
        
        return View::make('home')
        ->with('a',$ab);
    }
    public function dynamic($test)
    {
        
        return View::make('home')
        ->with('a',$test);
    }
}
    // public function insert(request $request)
    // {
    //     $name=$request->input('name');
    //     dd($name);
    // }
    // public function update(request $request)
    // {
    //     $name=$request->input('name');
    //     dd($name);
    // }
