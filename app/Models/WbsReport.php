<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WbsReport extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'wbs_category_id', 'location', 'datetime', 'description', 'file'];

    public function wbs_category()
    {
        return $this->belongsTo(WbsCategory::class, 'wbs_category_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public static function getData()
    {
        if (Auth::user()->user_detail) {
            $wbsReports = WbsReport::where('user_id', Auth::user()->id);
        }else{
            $wbsReports = WbsReport::query();
        }
        return $wbsReports;
    }
}
