@extends('five.layouts')

<h1>OOKAWA DB5POST</h1>
 
@section('content')
 @if ($items != null)
   @foreach ($items as $item)
   <table width="400px">
     <tr><th width="50px">id:</th>
      <td width="50px">{{ optional($item)->id }}</td>
     <tr><th width="50px">name:</th>
      <td width="50px">{{ optional($item)->name }}</td>
     <tr><th width="50px">mail:</th>
      <td width="50px">{{ optional($item)->mail }}</td>
     <tr><th width="50px">age:</th>
      <td width="50px">{{ optional($item)->age }}</td>
   </table>
  @endforeach
 @endif
@endsection
      
