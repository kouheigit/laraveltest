@extends('five.layouts')

<h1>OOKAWA DB7</h1>

@section('content')
  <table>
    <form action="/five/db7post" method="post">
      {{csrf_field()}}
     <tr><th>db7</th><td><input type="text" name="page" required></td>
     <tr><th></th><td><input type="submit" value="send">
@endsection
