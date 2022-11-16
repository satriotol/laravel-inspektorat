<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
    public function deleteFile()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }
    public static function getVerifiedBeritas()
    {
        return Berita::where('is_verified', 1)->orderBy('id', 'desc');
    }
    public static function getLatestBeritas($paginate, $is_kegiatan)
    {
        if ($is_kegiatan == 1) {
            return Berita::getVerifiedBeritas()->whereHas('berita_category', function ($q) {
                $q->where('is_kegiatan', 1);
            })->paginate($paginate);
        } elseif ($is_kegiatan == null) {
            return Berita::getVerifiedBeritas()->whereHas('berita_category', function ($q) {
                $q->where('is_kegiatan', null);
            })->paginate($paginate);
        } else {
            return Berita::getVerifiedBeritas()->paginate($paginate);
        }
    }
    public function getVerificationStatus()
    {
        if ($this->is_verified == 1) {
            return 'TERVERIFIKASI';
        } else {
            return 'BELUM';
        }
    }
}
