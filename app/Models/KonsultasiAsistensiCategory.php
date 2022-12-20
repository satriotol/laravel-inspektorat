<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiAsistensiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_konsultasi', 'is_asistensi'];

    public static function getKonsultasi()
    {
        return KonsultasiAsistensiCategory::where('is_konsultasi', 1)->get();
    }
    public static function getAsistensi()
    {
        return KonsultasiAsistensiCategory::where('is_asistensi', 1)->get();
    }
}
