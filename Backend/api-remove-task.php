<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

header("Content-Type: application/json");

$removedTask = $_GET["removedTask"];

$jsonTasksList = file_get_contents("tasks.json");
$tasksList = json_decode($jsonTasksList);

array_splice($tasksList, $removedTask, 1);

$jsonTasksList = json_encode($tasksList);
file_put_contents("tasks.json", $jsonTasksList);

echo true;

?>