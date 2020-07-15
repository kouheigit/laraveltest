@extends('person.layouts')

<h1>OOKAWA Board</h1>

@section('content')
  <table>
  <tr><th>DATA</th></tr>
  @foreach ($items as $item)
   <tr>
     <td>{{$item->getData()}}</td>
   </tr>
  @endforeach
  </table>
@endsection
