@extends('five.layouts')
<h1>ookawa DB10</h1>

@section('content')

<table>
  <form action="/five/db10" method="post">
     {{csrf_field()}}
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
    <tr><th>mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
    <tr><th>age: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
    <tr><th></th><td><input type="submit" value="submit">
 </form>

@endsection

