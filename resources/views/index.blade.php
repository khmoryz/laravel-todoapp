@extends('layouts.todoapp')
@section('title', 'ToToアプリ')
@section('menubar')
    @parent
    Topページ
@endsection

@section('content')
@if (Auth::check())
<p>USER: {{ $user->name . '(' . $user->email . ')' }}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a></p>
@endif
<h2>ToDoを入力して下さい</h2>
    <form method="POST" action="/todo">
        {{ csrf_field() }}
        <input type="text" name="item">
        <input type="submit">
    </form>
    <ol>
    @foreach ($param['todos'] as $todo)
        <li>{{ $todo->item }}
        <input value="delete" onclick="location.href='todo/delete?id={{ $todo->id }}'"></li>
    </ol>
    @endforeach
@endsection
@section('footer')
    copyright 2017 tuyano.
@endsection
