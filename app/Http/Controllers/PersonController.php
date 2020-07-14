<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class PersonController extends Controller
{
        //index(テーブルのすべての値を表示するメソット
	public function index(Request $request)
	{
		$items = Person::all();
		return view('person.index',compact('items'));
	}

	public function person1(Request $request)
        {
                $items = Person::all();
                return view('person.person1',compact('items'));
	}
        //ID検索 find searchメソット
	public function find(Request $request)
	{
		return view('person.personfind',['input'=>'']);
	}

	public function search(Request $request)
	{
		$item = Person::find($request->input);
		$param = ['input' => $request->input,'item'=>$item];
		return view('person.personfind',$param);
	}
	//名前検索メソット personname,personsearch
	public function personname(Request $request)
	{
		return view('person.personname',['input'=>'']);
	}

	public function personsearch(Request $request)
	{
		$item = Person::where('name',$request->input)->first();
		$param = ['input'=>$request->input,'item'=>$item];
		return view('person.personname',$param);

	}
        
	//年齢検索メソット(thename,thesearch)
	public function thename(Request $request)
	{
		return view('person.thename',['input'=>'']);
	}

	public function thesearch(Request $request)
	{
		$min = $request->input * 1;
		$max = $min + 10;
		$item = Person::ageGreaterThan($min)->
			ageLessThan($max)->first();
		$param = ['input'=>$request->input,'item'=>$item];
		return view('person.thename',$param);
	}
        //addとcreateでひとつのメソット新たな値を加えるメソット
	public function add(Request $request)
	{
		return view('person.add');
	}
	public function create(Request $request)
	{
		$this->validate($request,Person::$rules);
                $person = new Person;
                $form = $request->all();
                unset($form['_token']);
                $person->fill($form)->save();
		return redirect('/person');
	      /*  $person->fill($request->all())->save();*/ 
	}

	//従来あった値を変更するメソット(edit,henkou,henkoupost)
	public function edit(Request $request)
	{
		return view('person.edit');
	}

	public function henkou(Request $request)
	{
		$person = Person::find($request->id);
		return view('person.henkou',['form'=>$person]);
	}
	public function henkoupost(Request $request)
	{       
		$this->validate($request,Person::$rules);
		$person = Person::find($request->id);
		$form = $request->all();
		unset($form['_token']);
		$person->fill($form)->save();
		return redirect('/person');
	}

        //検索して値を削除するメソット(del,del1,remove)
	public function del(Request $request)
	{
		return view('person.del');
	}

	public function del1(Request $request)
	{
		$person = Person::find($request->id);
		return view('person.del1',['form'=>$person]);
	}

	public function remove(Request $request)
	{
		Person::find($request->id)->delete();
		return redirect('/person');
	}

}
