<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebijakan extends Model
{
    use HasFactory;
    protected $fillable = ['kebijakan_category_id', 'name', 'file'];

    public function kebijakan_category()
    {
        return $this->belongsTo(KebijakanCategory::class, 'kebijakan_category_id', 'id');
    }
}