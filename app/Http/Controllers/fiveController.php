<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fiveController extends Controller
{
	public function db(Request $request)
	{
		$items = DB::select('select * from people');
                return view('five.db',['items'=>$items]);
	}

	public function db1(Request $request)
	{
		$items = DB::table('people')->get();
		return view('five.db1',compact('items'));
	}

	public function db2(Request $request)
	{
		$id = $request->id;
		$item = DB::table('people')->where('id',$id)->first();
		return view('five.db2',compact('item'));

	}
	//laravel直下でGETとPOST通信
	public function dbori(Request $request)
	{
		
	        // $id = $request->input('id');
		// $item = DB::table('people')->where('id',$id)->first();
		$item = null;
        	return view('five.dbori',compact('item'));
	//	return view('five.dbori');
	}

	public function dbori2(Request $request)
	{   
		$id = $request->input('id');
		$item = DB::table('people')->where('id',$id)->first();
		return view('five.dbori',compact('item'));
	}
	
	public function db3(Request $request)
	{
		$id = $request->id;
		if($id == null){
			$items = DB::table('people')->whereNull('id');//値がNullでも大丈夫です
		}else{
			$items = DB::table('people')->where('id','<=', $id)->get();
		}
		return view('five.db3',compact('items'));
	}

	public function db4(Request $request)	
	{
		
		 return view('five.db4');
	}

	public function db4post(Request $request)
	{
		$name = $request->input('name');
		 $items = DB::table('people')
		->where('name','like','%' .$name . '%')
		->orwhere('mail','like', '%'.$name . '%')
		->get();
	    return view('five.db4post',compact('items'));
	}

	public function db5(Request $request)
	{
		return view('five.db5');
	}

	public function db5post(Request $request)
	{
		$min = $request->input('min');
		$max = $request->input('max');
		$items = DB::table('people')
			->whereRaw('age >= ? and age <= ?',
				[$min,$max])->get();
		return view('five.db5post',compact('items'));

	}

	public function db6(Request $request)
	{
		return view('five.db6');
	}
	
	public function db6post(Request $request)
	{
		$items = $request->input::get('a');
		return view('five.db6post',compact('items'));
	}
}
