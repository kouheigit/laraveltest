@extends('person.layouts')

<h1>OOKAWA PersonName</h1>

@section('content')
<h1>Search Name</h1>
<form action="/person/personname" method="post">
 {{ csrf_field() }}
<input type="text" name="input" value="{{$input}}">
<input type="submit" value="find" >
</form>
@if (isset($item))

<table>
 <tr><th>Data</th></tr>
 <tr> 
   <td>{{$item->getData()}}</td>
 </tr>
</table>
@endif
@endsection
