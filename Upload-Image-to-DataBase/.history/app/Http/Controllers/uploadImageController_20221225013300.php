<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImageController extends Controller
{
    public function store(Request $request){
        
        $path = $this-> uploadImageController($request,'Users'); 
        return view('upload');
    }
}