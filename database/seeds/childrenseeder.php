<?php

use Illuminate\Database\Seeder;

class childrenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $param = [
		    'name'=>'鬼塚英吉',
		    'mail'=>'eikitionizuka@gmail.com',
		    'age'=>24,
	    ];
	    DB::table('children')->insert($param);

	    $param = [
                    'name'=>'長渕剛',
                    'mail'=>'eikitionizuka@gmail.com',
		    'age'=>62,
	    ];
	    DB::table('children')->insert($param);

	    $param = [
                    'name'=>'河野孝志',
                    'mail'=>'eikitionizuka@gmail.com',
                    'age'=>43,
            ];
            DB::table('children')->insert($param);

    }
}
