<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Pendonor;

class PendonorSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pendonor::truncate();
        Pendonor::insert([
            [
                'name' => 'Bilal',
                'email' => 'bilal@gmail.com',
                'phone' => '089699633241',
                'password' => bcrypt('111111'),
                'province_id' => '4',
                'blood_type_id' => '2',
                'latitude' => '-7.801932',
                'longitude' => '110.368826',
                'status' => '1'
            ],
            [
                'name' => 'Ammar',
                'email' => 'ammar@gmail.com',
                'phone' => '089699633241',
                'password' => bcrypt('111111'),
                'province_id' => '4',
                'blood_type_id' => '1',
                'latitude' => '0.160059',
                'longitude' => '113.595239',
                'status' => '1'
            ],
            [
                'name' => 'Samuel',
                'email' => 'samuel@gmail.com',
                'phone' => '089699633241',
                'password' => bcrypt('111111'),
                'province_id' => '8',
                'blood_type_id' => '3',
                'latitude' => '-4.544497', 
                'longitude' => '104.885960',
                'status' => '1'
            ]
        ]);
    }
}
