@extends('five.layouts')

<h1>OOKAWA db2</h1>

@section('content')
<table>
  <tr><th>id</th><td>{{ optional($item)->id }}</td></tr>
  <tr><th>Name</th><td>{{ optional($item)->name }}</td></tr>
  <tr><th>Mail</th><td>{{ optional($item)->mail }}</td></tr>
  <tr><th>age</th><td>{{ optional($item)->age }}</td></tr>
</table>

@endsection
