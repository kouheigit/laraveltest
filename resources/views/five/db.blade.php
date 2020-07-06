@extends('five.layouts')

<h1>OOKAWA vali</h1>

@section('content')
  <table>
  <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
  @foreach ($items as $item)
       <tr>
         <td>{{$item->name}}</td>
         <td>{{$item->mail}}</td>
         <td>{{$item->age}}</td>
       </tr>
  @endforeach
  </table>

@endsection
