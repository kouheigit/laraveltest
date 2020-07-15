@extends ('person.layouts')
<h1>PERSON EDIT</h1>

@section('content')
 <h1>EDIT</h1>
  <table>
    {{  csrf_field() }}
  <form action="/person/henkou" method="get">
   <!--DB10Sを参考にせよ-->
    <h1>変更する値のIDを入力して下さい</h1>
      <input type="text" name="id" method="get">
      <input type="submit" value="send">
　 </form>
</table>
@endsection
