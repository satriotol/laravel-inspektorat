<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'verified_by', 'berita_category_id', 'berita_subcategory_id', 'title', 'description', 'image', 'is_verified'];

}
