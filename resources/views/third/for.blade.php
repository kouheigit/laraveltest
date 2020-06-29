@extends('third.layouts')

<h1>OOKAWA for</h1>

@section('content')

 <body>
   <h1>Blade/for</h1>
   <p>&#064;forディレクティブ</p>
   <ol>
   @for ($i = 1;$i < 100; $i++)
   @if($i % 2 == 1)
     @continue
   @elseif ($i <= 50)
  <li>No,{{$i}}
   @else
      @break
   @endif 
   @endfor
 </ol>  
 </body>
@endsection
~           

