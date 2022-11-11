<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaSubcategory extends Model
{
    use HasFactory;
    protected $fillable= ['berita_category_id', 'name', 'image'];
}
