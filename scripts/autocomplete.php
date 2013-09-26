<?php

require_once "db/connection.php";

$db = new tiso_mysqli();

$term = $_GET['term'];

$query = "SELECT user_name FROM users WHERE user_name LIKE '%$term%'";
$result = $db->query($query);
$row = $result->fetch_assoc();

echo json_encode($row);