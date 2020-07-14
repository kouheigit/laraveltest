@extends ('person.layouts')
<h1>PERSON DEL</h1>

@section('content')
 <h1>削除する値のIDを入力して下さい</h1>
 <table>
   {{ csrf_field() }}
   <form action="/person/del1" method="get">
     <input type="text" name="id" method="get">
     <input type="submit" value="send">
   </form>
 </table>
 @endsection

