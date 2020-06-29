@extends('third.layouts')

<h1>OOKAWA foreach2</h1>

@section('content')

 <body>
  <h1>Blade/foreach2</h1>
  <p>&#064;foreachディレクティブ</p>
  @foreach($data as $item)
  @if($loop->first)
  <p>※データ一覧</p>
  @endif
  <li>No,{{$loop->iteration}}.{{$item}}</li>
  @if($loop->last)
  </ul><p>------ここまで</p>
  @endif
  @endforeach
 </body>

@endsection

