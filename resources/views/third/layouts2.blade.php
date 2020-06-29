<html>
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="{{ asset('/css/ookawa1.css')}}">
   <title>@yield('title')</title>
 </head>
<body>
 <h1>Layout2</h1>
 @section('menubar')
 <ul>
    <p class="menutitle">※ メニュー</p>
    <li>@show</li>
 </ul>
 <hr size="1">
 <div class="content">
  @yield('content')
 </div>
 <div class="footer">
  @yield('footer')
 </div>
</body>
</html>
