<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $dates = ['expires_at'];

    public function setExpiresAtAttribute($value)
    {
        $this->attributes['expires_at'] = now()->addSeconds($value);
    }

    
    protected $fillable = [

        'url', 'code', 'hits', 'qr_code', 'expires_at', 'user_id'

    ];
}
