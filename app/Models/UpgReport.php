<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpgReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'upg_category_id', 'user_id', 'name', 'address', 'jabatan', 'instansi', 'phone', 'hubungan_dengan_pemberi', 'datetime_gratifikasi', 'address_gratifikasi', 'uraian_jenis_gratifikasi', 'nilai_gratifikasi', 'alasan_pemberian', 'kronologi_pemberian', 'file'
    ];

    public function upg_category()
    {
        return $this->belongsTo(UpgCategory::class, 'upg_category_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
