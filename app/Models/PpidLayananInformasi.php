<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpidLayananInformasi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'link', 'description', 'icon', 'type'];

    const TYPELINK = 'Link';
    const TYPEIMAGE = 'Gambar';
    const TYPEDETAIL = 'Detail';
    const TYPES = [
        self::TYPELINK, self::TYPEIMAGE, self::TYPEDETAIL
    ];

    public function ppid_layanan_informasi_details()
    {
        return $this->hasMany(PpidLayananInformasiDetail::class, 'ppid_layanan_informasi_id', 'id');
    }
}
