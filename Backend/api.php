<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

header("Content-Type: application/json");

$jsonTasksList = file_get_contents("tasks.json");
echo $jsonTasksList;

?>