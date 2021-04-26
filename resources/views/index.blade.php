<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="todo-card">
        
        <h1 class="todo-ttl">Todo List</h1>
        <form action="/add" method="post" class="add" >
            @csrf
            <input type="text" class="todo-list" name="content">
            <input type="submit" value="追加" class="todo-add">
        </form>



        <form action="/todo/delete" class="task" method="post">
        @csrf
        <table class="table">
            <tr class="flex">
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
            @foreach($items as $item)
            <p>{{$item}}</p>

            <tr class="flex">
                <td>
                    日付が入るよん
                </td>
                <td>
                    <input type="text" value="{{$item->content}}" class="add-task">
                    <p>{{$item->id}}</p>
                </td>
                <td>
                    <input type="submit" value="更新" class="btn" name="up">
                </td>
                <td>
                <form action="{{ route('todo.delete', ['id' => $item->id]) }}" method="post">
                @csrf
                    <button class="button-delete">削除</button>
                </form>
                </td>
            </tr>
            @endforeach
            </table>

        </form>
    </div>
</div>
</body>
</html>