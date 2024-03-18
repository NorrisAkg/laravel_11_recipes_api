<?php

namespace App\ApiCore\Tools;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

trait  FileUploadTrait
{
    public function upload (UploadedFile $file, $folder = null, string $filename = null, string $disk = 'uploads') {
        $name = !is_null($filename) ? $filename : Str::random(25) . '.' . $file->getClientOriginalName();
        $path = $file->storeAs($folder, $name, $disk);

        return $path;
    }
}
