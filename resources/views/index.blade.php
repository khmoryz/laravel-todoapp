<html>
    <head>
        <title>ToDoApp</title>
        <style>
            /* ここにcss書く */
        </style>
    </head>
    <body>
        <h1>laravel-todoapp</h1>
        <p>タスクを入力して下さい</p>
        <form method="POST" action="/hello">
            {{ csrf_field() }}
            <input type="text" name="msg">
            <input type="submit">
        </form>
        <ol>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
        </ol>
    </body>
</html>
