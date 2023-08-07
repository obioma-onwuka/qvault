<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $dates = ['expires_at'];

    public function setExpiresAtAttribute($value)
    {
        $this->attributes['expires_at'] = now()->addSeconds($value);
    }

    protected $fillable = [

        'name', 'facebook_handle', 'twitter_handle', 'instagram_handle', 'phone_number', 'email', 'code', 'qr_code', 'hits', 'expires_at'

    ];
}
