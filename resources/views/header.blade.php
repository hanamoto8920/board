<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">ボード</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{ route('board_index')}}">ブログ一覧</a>
      <a class="nav-item nav-link" href="{{ route('board_create') }}">ブログ投稿</a>
      <a class="nav-item nav-link" href="/user/index">ユーザー一覧</a>
      <a class="nav-item nav-link" href="/login">ログイン</a>
      <a class="nav-item nav-link" href="">ログアウト</a>
      <a class="nav-item nav-link" href="/register">新規登録</a>
      <a class="nav-item nav-link" href="/home">マイページ</a>
    </div>
  </div>
</nav>