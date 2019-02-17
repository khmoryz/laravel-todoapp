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
        <form method="POST" action="/todo">
            {{ csrf_field() }}
            <input type="text" name="item">
            <input type="submit">
        </form>
        <ol>
        @foreach ($todos as $todo)
            <li>{{ $todo->item }}
            <input value="delete" onclick="location.href='todo/delete?id={{ $todo->id }}'"></li>
        @endforeach
        </ol>
    </body>
</html>
