<?php

// var_dump($_POST);

$connection = require_once './Connection.php';

$id = $_POST['id'] ?? '';
if ($id) {
    $connection->updateNote($id, $_POST);
} else {
    $connection->addNote($_POST);
}



header('Location: index.php');
