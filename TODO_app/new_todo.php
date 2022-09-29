<?php

// var_dump($_POST);

$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if ($todoName) {
    if (file_exists('todo.json')) {
        $json = file_get_contents('todo.json');
        $jsonArray = json_decode($json, true);
    } else {
        //create new empty array
        $jsonArray = [];
    }
    $jsonArray[$todoName] = ['completed' => false];
    // print_r($jsonArray);
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header('Location: index.php');
