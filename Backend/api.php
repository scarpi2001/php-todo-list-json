<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

header("Content-Type: application/json");

$value = $_GET["task"];

$tasksObj = [
    [
        "task" => $value,
        "completed" => false
    ],
];

echo json_encode($tasksObj);

?>