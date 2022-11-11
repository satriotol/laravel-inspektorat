<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'is_kegiatan'];
}