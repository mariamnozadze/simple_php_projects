<?php

$todos = [];

if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO app</title>
</head>

<body>

    <form action="new_todo.php" method="POST">
        <input type="text" name="todo_name" placeholder="Enter your todo">
        <button>New Todo</button>
    </form>

    <?php foreach ($todos as $todoName => $todo) : ?>
        <div style="margin-top: 20px;">
            <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?> />
            <?php echo $todoName ?>
            <form style="display: inline-block;" action="delete.php" method="POST">
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                <button>delete</button>
            </form>
        </div>
    <?php endforeach; ?>

</body>

</html>