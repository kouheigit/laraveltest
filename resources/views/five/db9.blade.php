@extends('five.layouts')

<h1>OOKAWA DB9</h1>
@section('content')

 <table>
    {{ csrf_field() }}
    {{$start}}
@if ($start == null)
<form action="/five/db9" method="get">
   <h1>id:</h1>
   <input type="text" name="id" method="get">
   <input type="hidden" name="start" method="get"value="1">
   <input type="submit" value="send">
 </table>
@endif

@if ($items!=null)
 @foreach ($items as $item)
 <form action"/five/db9" method="post">
   <table width="400px">
     <tr><th width="50px">id:</th>
      <td width="50px">{{ optional($item)->id }}</td>
     <tr><th width="50px">name:</th>
      <td width="50px"><input type="text" value="{{ optional($item)->name }}"></td>
     <tr><th width="50px">mail:</th>
      <td width="50px"><input type="text" value=" {{ optional($item)->mail }}"></td>
     <tr><th width="50px">age:</th>
      <td width="50px"><input type="text" value="{{ optional($item)->age }}"></td>
      <tr><th width="50px"></th>
       <td width="50px"><input type="submit" value="send"></td>
   </table>
  @endforeach
 @endif
@endsection

