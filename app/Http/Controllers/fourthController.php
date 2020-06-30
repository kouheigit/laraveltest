<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fourthController extends Controller
{
	public function index(Request $request)
	{
		return view('fourth.index',['data'=>$request->data]);
	}
}
