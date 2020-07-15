@extends ('person.layouts')

<h1>OOKAWA PERSON HASMANY</h1>

@section('content')
  <table>
  <tr><th>Person</th><th>Board</th></tr>
  @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
        <td>
     @if ($item->boards != null)
        <table width="100%">
        @foreach ($item->boards as $obj)
	  <tr><td>{{$obj->getData()}}
        @endforeach
        </table>
      @endif
     </td>
    </tr>
  @endforeach
  </table>
@endsection	 
