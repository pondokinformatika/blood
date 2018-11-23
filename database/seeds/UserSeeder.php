<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
        	[
        		'name' => 'Admin',
        		'email' => 'admin@example.com',
        		'password' => bcrypt('111111'),
        		'role' => 1
        	]
        ]);
    }
}
