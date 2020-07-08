@extends('five.layouts')

<h1>OOKAWA DB5</h1>
 
@section('content')
  <table>
    <form action="/five/db5post" method="post">
     {{ csrf_field() }}
    <tr><th>min: </th><td><input type="text" name="min" required></td></tr>
    <tr><th>max: </th><td><input type="text" name="max" required></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </table>
@endsection
