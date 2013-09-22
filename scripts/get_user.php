<?php

require_once "db/connection.php";

$db = new tiso_mysqli();

$user_id = $_REQUEST['user_id'];

$query = "SELECT * FROM users WHERE user_id = " . $user_id;

$result = $db->query($query);

$row = $result->fetch_assoc();

$user_name = $row['user_name'];
$user_email = $row['user_email'];
$user_screen_name = $row['user_screen_name'];
$user_bio = $row['user_bio'];

