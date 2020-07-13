<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
class ChildrenController extends Controller
{
	public function index(Request $request)
	{
		$items = Child::all();
		return view('child.index',compact('items'));
	}

	public function getdata(Request $request)
	{
		$items = Child::all();
		return view('child.get',compact('items'));
	}

	public function childadd(Request $request)
	{
		return view('child.childadd');
	}
	public function childcreate(Request $request)
	{
                $this->validate($request, Child::$rules);
                $child = new Child;
                $form = $request->all();
                unset($form['_token']);
                $child->fill($form)->save();
                return redirect('/child');
	}

}
