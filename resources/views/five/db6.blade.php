@extends('five.layouts')

<h1>OOKAWA DB6</h1>
@section('content')
 <table>
    {{ csrf_field() }}
  <li><a href="/five/db6?value=1">昇順</a></li>
  <li><a href="/five/db6?value=0">降順</a></li>
 </table>


 @if ($val !=null)
  @foreach ($val as $vals)
<table width="400px">
  <tr><th width="50px">name:</th>
   <td width="50px">{{ optional($vals)->name }}</td>
  <tr><th width="50px">mail:</th>
   <td width="50px">{{ optional($vals)->mail }}</td>
  <tr><th width="50px">age:</th>
   <td width="50px">{{ optional($vals)->age }}</td>
</table>
  @endforeach
 @endif
@endsection

