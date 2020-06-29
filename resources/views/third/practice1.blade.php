@extends('third.layouts')

<h1>OOKAWA practice1</h1>

@section('content')

 <body>
   <h1>Blade/practice1</h1>
   <p>{{$msg}}</p>
   <form method="post" action="/third/practice1">
      {{ csrf_field() }}
   <input type="text" name="msg">
   <input type="submit">
 </body>

@endsection

