@extends('layout')
@section('title', 'ユーザー一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>会員一覧</h2>
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th></th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection