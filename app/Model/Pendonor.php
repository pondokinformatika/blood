<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pendonor extends Authenticatable
{

    protected $fillable = [
        'name', 'email', 'password','province_id', 'blood_type_id', 'latitude', 'longitude'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blood_type()
    {
    	return $this->belongsTo(BloodType::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
