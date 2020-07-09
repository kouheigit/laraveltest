@extends('five.layouts')

<h1>OOKAWA DB9EDIT</h1>
@section('content')
 @if ($items!= null)
   @foreach ($items as $item)
   <table width="400px">
    <form action="/five/db9edit">
     <tr><th width="50px">id:</th>
      <td width="50px">{{ optional($item)->id }}</td>
     <tr><th width="50px">name:</th>
      <td width="50px"><input type="text" name="name" value="{{ optional($item)->name }}"></td>
     <tr><th width="50px">mail:</th>
      <td width="50px"><input type="text" name="mail" value="{{ optional($item)->mail }}"> </td>
     <tr><th width="50px">age:</th>
      <td width="50px"><input type="text" name="age" value="{{ optional($item)->age }}"></td>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
   </table>
  @endforeach
 @endif
@endsection

