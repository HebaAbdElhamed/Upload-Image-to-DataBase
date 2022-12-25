<?php 
namespace App\Traits;

use Illuminate\Http\Request;

trait uploadImageTriat
{
    public function uploadImage(Request $request,$folderName){
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs($folderName,$image,'local');
        return $path;
    }
}