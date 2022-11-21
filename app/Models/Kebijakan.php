<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Kebijakan extends Model
{
    use HasFactory;
    protected $fillable = ['kebijakan_category_id', 'name', 'file'];

    public function kebijakan_category()
    {
        return $this->belongsTo(KebijakanCategory::class, 'kebijakan_category_id', 'id');
    }
    public function deleteFile()
    {
        Storage::disk('public_uploads')->delete($this->attributes['file']);
    }
    public function temas()
    {
        return $this->belongsToMany(Tema::class, KebijakanTema::class);
    }
    public function kebijakan_temas()
    {
        return $this->hasMany(KebijakanTema::class, 'kebijakan_id', 'id');
    }
    public static function getFrontenddata($kebijakancategory, $paramaters = Null)
    {
        if ($paramaters != '') {
            $kebijakans = Kebijakan::where('name', 'LIKE', "%{$paramaters}%")
                ->where('kebijakan_category_id', $kebijakancategory);
        } else {
            $kebijakans = Kebijakan::where('kebijakan_category_id', $kebijakancategory)->orderByDesc('id');
        }
        return $kebijakans;
    }
}
