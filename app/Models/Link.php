<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'image', 'description', 'whatsapp_url', 'short_description', 'google_form_url'];

    public function deleteFile()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }

    public static function getOnlyLink()
    {
        return Link::where('image', null)->get();
    }

    public static function getLayananLinks()
    {
        return Link::where('image', '!=', 2)->get();
    }
}
