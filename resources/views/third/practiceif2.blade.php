@extends('third.layouts')

<h1>OOKAWA practice</h1>

@section('content')

 <body>
  <h1>Blade/practiceif2</h2>
  @isset ($msg)
  <p>こんにちわ、{{$msg}}さん</p>
  @else
  <p>なんか書いて下さい</p>
  @endisset
  <form method="POST" action="/third/practiceif2">
     {{ csrf_field() }}
   <input type="text" name="msg">
   <input type="submit">
 </form>
 </body>

@endsection

