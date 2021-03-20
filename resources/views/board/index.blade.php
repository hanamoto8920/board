@extends('layout')
@section('title','ボード一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>ブログ記事一覧</h2>
    @if (session('err_msg'))
      <p class="text-danger">エラーが発生しました: {{ session('err_msg') }}</p>
    @endif
    <table class="table table-striped">
      <tr>
        <th>記事番号</th>
        <th>日付</th>
        <th>タイトル</th>
        <th>ユーザーID</th>
        <th></th>
      </tr>
      @foreach ($boards as $board)
      <tr>
        <td>{{ $board->id }}</td>
        <td>{{ $board->created_at }}</td>
        <td><a href="/board/{{ $board->id }}">{{ $board->title }}</a></td>
        <td>{{ $board->user_id }}</td>
        <td></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection