<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PPIDDasarHukum extends Model
{
    use HasFactory;
    protected $fillable = ['image','description'];

    public function kebijakans()
    {
        return $this->hasMany(PPIDDasarHukumFIle::class, 'ppid_layanan_informasi_id', 'id');
    }
    public function deleteFile()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }

}
