<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thirdController extends Controller
{

  public function index(Request $request){

	$data = [
		'msg'=>'これはbladeを利用したサンプルです',
	];
	return view('third.practice',$data);
  }
}
