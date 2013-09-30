<?php

require_once 'db/connection.php';

$db = new tiso_mysqli();
$user_id = $_REQUEST['user_id'];

$query = "SELECT user_name FROM users WHERE user_id = '$user_id'";
$delete_query = " DELETE FROM users WHERE user_id = '$user_id'";
$result = $db->query($query);
$delete_result = $db->query($delete_query);

if (is_object($result) && $delete_result) {
	$row = $result->fetch_assoc();
	echo "User " . $row['user_name'] . " was succesfully deleted !";
} else {
	echo "Something went wrong. We're all crying over here.";
}


