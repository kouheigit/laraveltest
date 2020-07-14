@extends ('person.layouts')

@section('content')
 <h1>Board ADD</h1>
 <table>
   <form action="/boardadd" method="post">
      {{ csrf_field() }}
    <tr><th>person_id: </th><td><input type="text" name="person_id">
    <tr><th>title: </th><td><input type="text" name="title">
    <tr><th>message:  </th><td><input type="text" name="message">
    <tr><th></th><td><input type="submit" value="send"></td></tr>
   </form>
 </table>
@endsection

