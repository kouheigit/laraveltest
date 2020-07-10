<?php

use Illuminate\Database\Seeder;

class testseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $param = [
		    'name'=>'taro',
		    'mail'=>'taro@gmail.com',
		    'age'=>12,
	];
	    DB::table('test')->insert($param);

	     $param = [
                    'name'=>'jiro',
                    'mail'=>'jiro@gmail.com',
                    'age'=>11,
        ];
            DB::table('test')->insert($param);
         $param = [
                    'name'=>'saburo',
                    'mail'=>'saburo@gmail.com',
                    'age'=>10,
        ];
            DB::table('test')->insert($param);

    }
}
