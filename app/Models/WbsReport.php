<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WbsReport extends Model
{
    use HasFactory;

    protected $fillable = ['wbs_category_id', 'name', 'location', 'datetime', 'description', 'file'];

    public function wbs_category()
    {
        return $this->belongsTo(WbsCategory::class, 'wbs_category_id', 'id');
    }
}
