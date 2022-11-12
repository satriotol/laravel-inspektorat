<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function storeImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image_name = date('mdYHis') . '-' . $name;
            $image = $image->storeAs('image', $image_name, 'public_uploads');

            TemporaryFile::create([
                'filename' => $image
            ]);
            return $image;
        };
        return '';
    }
}
