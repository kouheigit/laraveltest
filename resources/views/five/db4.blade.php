@extends('five.layouts')

<h1>OOKAWA DB4</h1>

@section('content')
  <table>
   <form action="/five/db4post" method="post">
     {{ csrf_field() }}
     <tr><th>name or mail: </th><td><input type="text" name="name"></td></tr>
     <tr><th></th><td><input type="submit" value="send"></td></tr>
 </table>
@endsection
