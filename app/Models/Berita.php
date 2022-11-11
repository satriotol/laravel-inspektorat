<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'verified_by', 'berita_category_id', 'berita_subcategory_id', 'title', 'description', 'image', 'is_verified'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function verified_by()
    {
        return $this->belongsTo(User::class, 'verified_by', 'id');
    }
    public function berita_category()
    {
        return $this->belongsTo(BeritaCategory::class, 'berita_category_id', 'id');
    }
    public function berita_subcategory()
    {
        return $this->belongsTo(BeritaSubcategory::class, 'berita_subcategory_id', 'id');
    }
    public function berita_galleries()
    {
        return $this->hasMany(BeritaGallery::class, 'berita_id', 'id');
    }
}
