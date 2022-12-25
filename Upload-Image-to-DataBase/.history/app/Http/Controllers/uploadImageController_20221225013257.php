<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImageController extends Controller
{
    public function store(Request $request){
        
        $path = $this->iuploadImageController($request,'Users'); 
        return view('upload');
    }
}