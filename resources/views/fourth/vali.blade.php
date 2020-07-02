@extends('fourth.layouts')

<h1>OOKAWA vali</h1>

@section('content')
  <p>{{$msg}}</p>
  <table>
  <form action="/fourth/vali"method="post">
      {{ csrf_field() }}
    <tr><th>name: </th><td><input type="text" name="name"></td></tr>
    <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
    <tr><th>age: </th><td><input type="text" name="age"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
  </table>

@endsection

