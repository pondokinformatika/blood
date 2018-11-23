<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    protected $fillable =
    [
    	'id', 'name', 'email', 'password', 
    	'phone', 'province_id', 'latitude', 
    	'longitude', 'status', 'created_at'
    ];
}
