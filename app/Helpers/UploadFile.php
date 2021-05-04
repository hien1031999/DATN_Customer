<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class UploadFile {
    public static function store($img, $folder) {
        $path = public_path($folder);
        if(!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $fileName = $img->getClientOriginalName();
        $photo = Image::make($img)->resize(150, 150, function($constraint)
        {
            $constraint->aspectRatio();
        })->orientate()->encode();
        Storage::disk('public')->put($folder. '/'. $fileName, $photo);

        return $fileName;
    }

    public static function delete($img, $folder) {
        $path = $folder. '/'. $img;
        if (file_exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}

