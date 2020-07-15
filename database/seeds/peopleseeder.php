<?php

use Illuminate\Database\Seeder;

class peopleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $param = [
		    'name'=>'リチャードブランソン',
		    'mail'=>'richard@gmail.com',
		    'age'=> 72,
	    ];
	    DB::table('people')->insert($param);

	    $param = [
		    'name'=>'波風ミナト',
		    'mail'=>'minatonamikaze@gmail.com',
		    'age'=> 24,
	     ];
	    DB::table('people')->insert($param);

	    $param = [
		    'name'=>'浜崎順平',
		    'mail'=>'syamugame@gmail.com',
		    'age'=>34,
	    ];
	   DB::table('people')->insert($param);
    }         
}
