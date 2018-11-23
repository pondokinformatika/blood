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

        DB::table('pendonors')->insert(
            [
                'name' => 'kaisan',
                'email' => 'kaisan@gmail.com',
                'phone' => '089699633241',
                'password' => bcrypt('111111'),
                'province_id' => '4',
                'latitude' => '-6.162409',  
                'longitude' => '106.873916',
                'status' => '1',
            ],
            [
                'name' => 'mase bilal',
                'email' => 'bilal@gmail.com',
                'phone' => '089697633241',
                'password' => bcrypt('111111'),
                'province_id' => '4',
                'latitude' => '5.067384',
                'longitude' => '96.045092',
                'status' => '1',
            ]
        );
    }
}
