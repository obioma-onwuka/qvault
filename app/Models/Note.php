<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $dates = ['expires_at'];

    public function setExpiresAtAttribute($value)
    {
        $this->attributes['expires_at'] = now()->addSeconds($value);
    }

    protected $fillable = [

        'title', 'content', 'code', 'user_id', 'otp', 'qr_code', 'hits', 'expires_at', 'data_code'

    ];
}
