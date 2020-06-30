@extends('fourth.layouts')

<h1>OOKAWA practice</h1>

@section('content')
 
  <p>ここが本文のコンテンツです</p>
<table>
  @foreach($data as $item)
  <tr><th>{{$item['name']}}{{$item['mail']}}</tr></th>
  @endforeach
</table> 
@endsection


