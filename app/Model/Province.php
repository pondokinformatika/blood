<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = 
    [
    	'id', 'name', 'latitude', 'longitude', 'creaeted_at'
    ];
}
