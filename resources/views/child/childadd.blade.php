@extends('child.layouts')

<h1>ookawa1 add</h1>

@section('content')
   @if (count($errors) > 0)
   <div>
      <ul>
         @foreach ($errors->all() as $error)
	    <li> {{ $error }}</li>
	 @endforeach
    </div>
    @endif
    <table>
     <form action="/childadd" method="post">
       {{ csrf_field()}}
       <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
       <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
       <tr><th>age:</th><td><input type="number" name="age" value="{{old('age')}}"></td></tr>
       <tr><th></th><td><input type="submit"value="send"></td></tr>
     </form>
   </table>
@endsection
