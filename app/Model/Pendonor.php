<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pendonor extends Authenticatable
{

    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blood_type()
    {
    	return $this->belongsTo(BloodType::class);
    }
    // protected $fillable =
    // [
    // 	'id', 'name', 'email', 'password', 
    // 	'phone', 'province_id', 'latitude', 
    // 	'longitude', 'status', 'created_at'
    // ];
}
