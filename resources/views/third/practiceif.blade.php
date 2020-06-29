@extends('third.layouts')

<h1>OOKAWA practiceif</h1>

@section('content')

 <body>
   <h1>Blade/practiceif</h1>
   @if($msg != '')
   <p>こんにちわ、{{$msg}}さん</p>
   @else
   <p>何か書いて下さい</p>
   @endif
   <form method="POST" action"/third/practiceif">
     {{ csrf_field() }}
     <input type="text" name="msg">
     <input type="submit">
   </form>
 </body>

@endsection

