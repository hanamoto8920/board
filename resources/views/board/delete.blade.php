<!-- @extends('layout')
@section('title', '削除ページ')
@section('content')
<form action="/delete" method="post">
  @csrf
  <p>{{ $board->title}}</p>
  <p>{{ $board->content}}</p>
  <input type="submit" value="削除">
</form>
@endsection -->