@extends('layout')
@section('title', '記事詳細')
@section('content')
<h2>詳細ページ</h2><br>
<table class="table">
  <tr>
    <td>ID</td>
    <td>ユーザーID</td>
    <td>タイトル</td>
    <td>内容</td>
  </tr>
  <tr>
    <td>{{ $board->id }}</td>
    <td>{{ $board->user_id }}</td>
    <td>{{ $board->title}}</td>
    <td>{{ $board->content}}</td>
  </tr>
</table>
@endsection