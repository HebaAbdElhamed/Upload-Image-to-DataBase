<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImageController extends Controller
{
    public function store(Request $request){
        
        $path = $thisupl->file('photo')->storeAs('users',$image,'local');
        return view('upload');
    }
}