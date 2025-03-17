<?php
namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadHelper
{
    public static function uploadImage(UploadedFile $image, $directory)
    {
        $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $path     = $image->storeAs($directory, $fileName, 'public');
        return str_replace('public/', '', $path);
    }

    public static function deleteImage($imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists( $imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
}
