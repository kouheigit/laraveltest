@extends ('person.layouts')

<h1>ID Delete</h1>

@section('content')

<h1>投稿を削除する</h1>
<table>
  <form action="/person/del1" method="post">
      {{ csrf_field() }}
     <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>name:</th><td>{{$form->name}}</td></tr>
      <tr><th>mail:</th><td>{{$form->mail}}</td></tr>
      <tr><th>age:</th><td>{{$form->age}}</td></tr>
      <tr><th></th><td><input type="submit" value="send">
    </form>
 </table>
@endsection
