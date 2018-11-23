<?php

use Illuminate\Database\Seeder;

class BoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('bood_types')->truncate();

        DB::table('bood_types')->insert([
        	['name' => 'O'],
	       	['name' => 'A'],
	       	['name' => 'B'],
	       	['name' => 'AB']
        ]);
    }
}
