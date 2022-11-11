<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'is_kegiatan'];

    public function beritas()
    {
        return $this->hasMany(Berita::class, 'berita_category_id', 'id');
    }
    public function berita_subcategories()
    {
        return $this->hasMany(Berita::class, 'berita_category_id', 'id');
    }
}
