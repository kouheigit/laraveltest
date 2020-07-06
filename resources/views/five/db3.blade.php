@extends('five.layouts')

<h1>OOKAWA db3</h1>

@section('content')
  @if ($items != null)
  @foreach ($items as $item)
  <table width="400px">
    <tr><th width="50px">id:</th>
    <td width="50px">{{ optional($item)->id }}</td>
    <tr><th width="50px">name:</th>
    <td width="50px">{{ optional($item)->name }}</td>
  </table>
  @endforeach
 @endif

@endsection
