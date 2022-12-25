<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Traits\uploadImageTriat;

class uploadImageController extends Controller
{
    use uploadImageTriat;
    public function store(Request $request){
        
        $path = $this -> uploadImage($request,'users');
        Image::create([
            'path' => $path,
        ]);
        return view('upload');
    }
}