<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiAsistensiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_konsultasi', 'is_asistensi'];
}
