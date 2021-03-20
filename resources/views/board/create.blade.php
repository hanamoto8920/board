@extends('layout')
@section('title', '投稿ページ')
@section('content')
<div class="col-md-8">
  <h2>新規投稿</h2>

  <div>
    <form action="/store" method="post">
    @csrf
      <label class="form-label">タイトルを記入して下さい。</label>
      <input type="text" class="form-control" name="title" placeholder="※30文字以内">
  </div>
  <br>
  <div>
    <label class="form-label">内容を記入して下さい。</label>
    <textarea type="text" name="content" class="form-control" rows="6" placeholder="※30文字以内"></textarea>
  </div>
  <div>
  <input type="hidden" name="user_id" value="{{ $user->id }}">
  </div>
  <br>
  <div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">投稿する</button>
    <a href="{{ route('board_index') }}" type="button" class="btn btn-secondary btn-lg btn-block">戻る</a>
  </div>
  </form>

</div>
@endsection