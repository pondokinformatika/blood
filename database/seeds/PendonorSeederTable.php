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

        DB::table('pendonors')->insert([
            'name' => 'kaisan',
            'email' => 'kaisan@gmail.com',
            'phone' => '089699633241',
            'password' => bcrypt('111111'),
            'province_id' => '4',
            'latitude' => '0.0000000',
            'longitude' => '0.0000000',
            'status' => '1',
        ]);
    }
}
