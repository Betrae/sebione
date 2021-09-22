<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;
use Storage;
use Image;

class UploadImage extends Model
{
    public static function upload($request, $fileName, $default="")
    {
        $name = "";
        $photo = $request->logo;

        if($request->hasFile($fileName)) {
            $extension = $photo->getClientOriginalExtension();
            $name = rand(11111, 99999).".".date('Y-m-d').".".time().".".$extension;
            Image::make($photo)->resize(100, 100)->save( storage_path('/app/public/logo/' . $name) );
            $name = $name;
        } else {
            $name = $default;
        }
        return $name;
    }
}
