<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImageController extends Controller
{
    public function store(Request $request){
        
        $path = $this->iuploadImageController($request,'Users')->storeAs('users',$image,'local');
        return view('upload');
    }
}