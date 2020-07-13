@extends('person.layouts')

<h1>OOKAWA Person1</h1>

@section('content')
  <table>
   <tr><th>DATA</th>
   @foreach($items as $item)
   <tr>
      <td>{{$item->getData()}}</td>
   </tr>
   @endforeach
@endsection

