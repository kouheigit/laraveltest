@extends('third.layouts')

<h1>OOKAWA practice1</h1>

@section('content')

<body>
 <h1>Blade/while</h1>
  <p>&#064;whileディレクティブの例</p>
  <ol>
   @php 
   $counter = 0;
   @endphp
   @while($counter < count($data))
   <li>{{$data[$counter]}}</li>
   @php
   $counter++;
   @endphp
   @endwhile
 </ol>  
 </body>

@endsection

