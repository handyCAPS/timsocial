<?php

function check_password($user_id, $user_password) {
	require_once 'db/connection.php';
	$db = new tiso_mysqli();
	$request = "SELECT user_id, user_password FROM users WHERE (user_id, user_password) = ('$user_id', '$user_password')";
	$result = $db->query($query);
	if (is_object($result)) {
		return true;
	} else {
		return false;
	}
}