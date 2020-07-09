@extends('five.layouts')
<h1>ookawa DB9</h1>

@section('content')
 <table>
   <form action="/five/db9edit" method="post">
     {{csrf_field()}}
    <tr><th>id:<td><input type="text" name="id"></td>
    <tr><th><td><input type="submit" value="send"></td>
  </table>
@endsection
