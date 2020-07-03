<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests\vali2Request;
use Illuminate\Http\Request;
class fourthController extends Controller
{
	public function index(Request $request)
	{
		return view('fourth.index',['data'=>$request->data]);
	}

	public function middle(Request $response)
	{
		return view('fourth.middleware');
	}

	public function vali(Request $request)
	{
		return view('fourth.vali',['msg'=>'フォームを入力:']);
	}

	public function valipost(Request $request)
	{
		$validate_rule = [
			'name' =>'required',
			'mail'=>'email',
			'age'=>'numeric|between:0,150',
		];
		$this->validate($request,$validate_rule);
		return view('fourth.vali',['msg'=>'正しく入力されました']);
	}

	public function vali1(Request $request)
        {
                return view('fourth.vali1',['msg'=>'フォームを入力:']);
        }

        public function vali1post(Request $request)
        {
                $validate_rule = [
                        'name' =>'required',
                        'mail'=>'email',
                        'age'=>'numeric|between:0,150',
                ];
                $this->validate($request,$validate_rule);
                return view('fourth.vali1',['msg'=>'正しく入力されました']);
	}
	
	public function vali2(Request $request)
        {
                return view('fourth.vali2',['msg'=>'フォームを入力:']);
        }

        public function vali2post(Request $request)
	{
	  $validator = Validator::make($request->all(),[
		  'name'=>'required',
		  'mail'=>'email',
		  'age'=>'numeric|between:0,150',
	  ]);
	  if ($validator->fails()){
		  return redirect('fourth/vali2')
			  ->withErrors($validator)
			  ->withInput();
	  }
	   return view('fourth.vali2',['msg'=>'正しく入力されました']);
              /*  $validate_rule = [
                        'name' =>'required',
                        'mail'=>'email',
                        'age'=>'numeric|between:0,150',
                ];
                $this->validate($request,$validate_rule);
		return view('fourth.vali2',['msg'=>'正しく入力されました']);*/
        }

	public function vali3(Request $request)
        {
                return view('fourth.vali3',['msg'=>'フォームを入力:']);
        }

        public function vali3post(Request $request)
        {
		$rules = [
			'name'=>'require',
			'mail'=>'email',
			'age'=>'numeric|between:0,150',
		];	   

		$messages = [
			'name.required'=>'名前は必ず入力して下さい',
			'mail.email'=>'メールアドレスを入力して下さい',
			'age.numeric'=>'大物YOUTUBER',
		];
                $validator = Validator::make($request->all(),$rules,$messages);
		if ($validator->fails()){
			return redirect('/fourth/vali3')
				->withErrors($validator)
				->withInput();
		}
           return view('fourth.vali3',['msg'=>'正しく入力されました']);
        }

}
