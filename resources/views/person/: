@extends ('person.layouts')
<h1>OOKAWA ADD</h1>

@section('content')
 <h1>ADD</h1>
 @if (count($errors) > 0)
   <div>  
     <ul>
      @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
 @endif
 <table> 
   <form action="/person/add" method="post">
      {{ csrf_field() }}
    <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}">
    <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}">
    <tr><th>age:  </th><td><input type="text" name="age"  value="{{old('age')}}">
    <tr><th></th><td><input type="submit" value="send"></td></tr>
   </form>
 </table>
@endsection
