<?php

// var_dump($_POST);

$connection = require_once './Connection.php';
$connection->addNote($_POST);

header('Location: index.php');
