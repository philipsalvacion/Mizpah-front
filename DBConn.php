<?php
session_start();
$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "mizpah_database";

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');

$conn = new mysqli($server, $db_username, $db_password, $db_name);
?>
