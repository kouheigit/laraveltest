<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thirdController extends Controller
{

	public function index(Request $request)
	{

	$data = [
		'msg'=>'これはbladeを利用したサンプルです',
	];
	return view('third.practice',$data);
        }
	//以下重要(practice1メソット）
        public function practice1(Request $request)
	{
		$data = [
		'msg'=>'名前を入力しよう',
	        ];
		return view('third.practice1',$data);
	}

	public function practice1post(Request $request)
	{
		$msg = $request->msg;
		$data = [
		'msg'=>'こんにちわ'. $msg .'さん',
	];
		return view('third.practice1',$data);
	}

	public function practiceif(Request $request)
	{
		return view('third.practiceif',['msg'=>'']);
	}

	public function practiceifpost(Request $request)
	{
		return view('third.practiceif',['msg'=>$request->msg]);
	}
	public function practiceif2()
	{
		return view('third.practiceif2');
	}

	public function practiceif2post(Request $request)
	{
		return view('third.practiceif2',['msg'=>$request->msg]);
	}

	public function practiceforeach()
	{
		$data = ['one','two','tree','four','five'];
		return view('third.foreach',['data'=>$data]);
	}

	public function practicefor()
	{
		return view('third.for');
	}
	public function foreach2()
	{
	        $data = ['one','two','tree','four','five'];
		return view('third.foreach2',compact('data'));
	}
	
	public function practicewhile()
	{
		$data = ['one','two','tree','four','five'];
                return view('third.while',compact('data'));

	}

	public function practicelayout()
	{
		return view('third.practicelayout');
	}

	public function practicemessage()
	{
	$data = [
	     ['name'=>'山田太郎','mail'=>'yamadataro@gmail.com'],
	     ['name'=>'田中花子','mail'=>'hanako@gmail.com'],
	     ['name'=>'鈴木さちこ','mail'=>'satiko@gmail.com'],
        ];
	//	return view('third.practicemessage',['data'=>$data]);
	return view('third.practicemessage',compact('data'));

	 
	}


}
