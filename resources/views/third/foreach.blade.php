@extends('third.layouts')

<h1>OOKAWA foreach</h1>

@section('content')

 <body>
   <h1>Blade/foreach</h1>
   <p>&#064;foreachディレクティブの例</p>
   <ol>
   @foreach($data as $item)
   <li>{{$item}}
   @endforeach
  </ol>
 </body>
@endsection

