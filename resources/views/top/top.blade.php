@extends('layout')
@section('title', 'トップページ')
@section('content')
<h1 style="text-align: center; color: red;">トップページ</h1><br>
<p style="text-align: center ;">このサイトは、掲示板です
  誰でも閲覧することができます。<br>
  また、会員登録をすれば投稿も可能となっておりますので、<br>
  ぜひ会員登録もして投稿してみましょう！！</p>
<a href="/board">一覧ページへ</a>
<img src="mm.jpg" alt="top" width="980px">

@endsection