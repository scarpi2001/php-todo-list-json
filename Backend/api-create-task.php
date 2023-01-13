<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

header("Content-Type: application/json");

$newTask = $_GET["newTask"];

$jsonTasksList = file_get_contents("tasks.json");
$tasksList = json_decode($jsonTasksList);

$tasksList[] = [
    "text" => $newTask,
    "completed" => false
];

$jsonTasksList = json_encode($tasksList);
file_put_contents('tasks.json', $jsonTasksList);
?>