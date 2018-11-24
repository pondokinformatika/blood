<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patien extends Model
{
    protected $table = 'patients';

    protected $fillable = [
    	'id', 'name', 'phone', 'blood_type_id', 'province_id', 'longitude', 'latitude'
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
