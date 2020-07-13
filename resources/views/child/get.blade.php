@extends('child.layouts')


<h1>OOKAWA get</h1>

 @section('content')
  <table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
      <tr> 
        <td>{{$item->getData()}}</td>
      </tr>
      @endforeach
   </table>
@endsection
