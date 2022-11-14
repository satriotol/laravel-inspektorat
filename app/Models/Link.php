<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'image', 'description'];

    public function deleteFile()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }
}
