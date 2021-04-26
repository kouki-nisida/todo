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
        <form action="/"　method="post" class="add" >
            <input type="text" class="todo-list" name="content">
            <input type="submit" value="追加" class="todo-add">
        </form>



        <form action="" class="task">
        <table class="table">
            <tr class="flex">
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
            <tr class="flex">
                <td>
                    日付が入るgfgrghrththth
                </td>
                <td>
                    <input type="text" value={{$items}} class="add-task">
                </td>
                <td>
                    <input type="submit" value="更新" class="btn" name="up">
                </td>
                <td>
                    <input type="submit" value="削除" class="btn" name="deleate">
                </td>
            </tr>
            </table>

        </form>
    </div>
</div>

</body>
</html>