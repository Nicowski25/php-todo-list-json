<?php
$deletedTask = $_POST['deleteTask'];

$tasks_string = file_get_contents('tasks.json');

$tasks = json_decode($tasks_string, true);

array_splice($tasks, $_POST["index"], 1);

$new_tasks_string = json_encode($tasks);

file_put_contents('tasks.json', $new_tasks_string);

header('Content-Type: application/json');
echo $new_tasks_string;

?>