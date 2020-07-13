<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $this->call(testseeder::class);
	    $this->call(peopleseeder::class);
	    $this->call(childrenseeder::class); 
	   // $this->call(UserSeeder::class);
    }
}
