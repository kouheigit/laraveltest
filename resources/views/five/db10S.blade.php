@extends('five.layouts')
<h1>ookawa DB10S</h1>

@section('content')

<table>
  {{ csrf_field() }}
  <form action="/five/db10" method="get">
    <h1>id:</h1>
     <input type="text" name="id" method="get">
     <input type="submit" value="send">
  </form>
</table>




@endsection
