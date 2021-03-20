<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>

  </style>
</head>

<body>
  <header>
    @include('header')
  </header>
  <br>
  @if (Auth::check())
  <p style="color: green;">{{ $user->name }}さんがログインしています。</p>
  @else
  <p>ログインしていません。</p>
  @endif
  <br>
  <div class="container">
    @yield('content')
  </div>

  <footer class="footer bg-dark" style="margin-top: 50px;">
    @include('footer')
  </footer>
</body>

</html>