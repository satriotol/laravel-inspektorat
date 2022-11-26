<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'image',
            'file' => 'file'
        ]);
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
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');

            TemporaryFile::create([
                'filename' => $file
            ]);
            return $file;
        };
        return '';
    }
    public function storeFile(Request $request)
    {
        $request->validate([
            'file' => 'file'
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');

            TemporaryFile::create([
                'filename' => $file
            ]);
            return $file;
        };
        return '';
    }
    public function revert(Request $request)
    {
        $temporaryFile = TemporaryFile::where('filename', $request->getContent())->first();
        $temporaryFile->deleteFile();
        $temporaryFile->delete();
    }
}
