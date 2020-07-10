@extends('five.layouts')
<h1>ookawa DB11get</h1>

@section('content')

<table>
 <form action="/five/db11get" method="post">
   {{csrf_field()}}
  <input type="hidden" name="id" value="{{$form->id}}">
   <tr><th>name:</th>
  <td>{{$form->name}}</td>
   <tr><th>mail:</th>
  <td>{{$form->mail}}</td>
   <tr><th>age:</th>
  <td>{{$form->age}}</td>
   <tr><th>send:</th>
   <td> <input type="submit" value="send"></td>
</form>

@endsection

