<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{

    public function destroy($id) {
        $image = Image::find($id);
        $image->delete();

        $filePath = public_path('storage/images/' . $image->path);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        return back();
    }
}
