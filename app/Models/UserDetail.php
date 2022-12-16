<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'phone', 'address', 'gender', 'jabatan', 'instansi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
