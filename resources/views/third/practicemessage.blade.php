@extends('third.layouts2')

<h1>OOKAWA practicemessage</h1>

@section('content')

<body>
@section('content')
 <p>ここにコンテンツの本文のコンテンツ</p>
 <p>必要なだけ記述する</p>

@component('third.message')
   @slot('msg_title') 
    分離したコンテンツの表題部分
   @endslot

  @slot('msg_content')
   これはコンテンツの本文です
  @endslot
@endcomponent

</body>

@endsection

