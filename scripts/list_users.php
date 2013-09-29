<?php

require_once "db/connection.php";

function list_users($alphab = true) {
	$db = new tiso_mysqli();
	$sort_by = '';

	if ($alphab) {
		$sort_by = "ORDER BY user_name ASC";
	}

	$query = "SELECT user_screen_name, user_id FROM users " . $sort_by;
	$result = $db->query($query);
	$arrays = $result->fetch_all();

	for ($i = 0; $i <= count($arrays)-1; $i++) {
		echo '<li><a href="index.php?page=user_page&user_id=' . $arrays[$i][1] . '">' .  $arrays[$i][0] . '</a></li>';
	}
}