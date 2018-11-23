<?php

use Illuminate\Database\Seeder;
use App\Model\BloodType;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		BloodType::truncate();

        BloodType::insert([
        	['name' => 'O'],
	       	['name' => 'A'],
	       	['name' => 'B'],
	       	['name' => 'AB']
        ]);
    }
}
