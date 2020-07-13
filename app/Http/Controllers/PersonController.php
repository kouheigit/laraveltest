<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class PersonController extends Controller
{
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
        //ID検索
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

}
