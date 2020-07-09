@extends('five.layouts')
<h1>ookawa DB8</h1>

@section('content')
 <table>
  <form action="/five/db8post" method="post">
    {{csrf_field()}}
   <tr><td>name:</th><td><input type="text" name="name"></td>
   <tr><th>mail:</th><td><input type="text" name="mail"></td>
   <tr><th>age:</th><td><input type="text" name="age"></td>
   <tr><th></th><td><input type="submit" value="send">
 </table>
@endsection
