@extends('five.layouts')

<h1>OOKAWA dbori</h1>

@section('content')
<table>
  <form action="/five/dbori" method="post">
    {{ csrf_field() }}
  <tr><th>id: </th><td><input type="text" name="id"></td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
</table>

<table>
 <tr><th>id</th><td>{{ optional($item)->id }}</td></tr>
  <tr><th>Name</th><td>{{ optional($item)->name }}</td></tr>
  <tr><th>Mail</th><td>{{ optional($item)->mail }}</td></tr>
  <tr><th>age</th><td>{{ optional($item)->age }}</td></tr>
</table>

@endsection
