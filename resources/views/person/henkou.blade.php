@extends ('person.layouts')
<h1>ID henkou</h1>
@section('content')
<h1>IDを変更する</h1>
<table>
  <form action="/person/henkou" method="post">
      {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$form->id}}"></td>></tr>
      <tr><th>name:</th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
      <tr><th>mail:</th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
      <tr><th>age:</th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
      <tr><th></th><td><input type="submit" value="submit">
  </form>
</table> 
@endsection


