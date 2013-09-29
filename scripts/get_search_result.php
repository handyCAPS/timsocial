<?php

require_once "db/connection.php";

$name = trim($_POST['searchBox']);
$type = trim($_POST['searchFor']);
$db = new tiso_mysqli();

$name = $db->real_escape_string($name);
$dbtype = $db->real_escape_string($type);

if ($type === 'User Name') {
	$dbtype = 'user_name';
} else if ($dbtype === 'Screen Name') {
	$dbtype = 'user_screen_name';
}

$query = "SELECT user_name, user_id, user_screen_name FROM users WHERE " . $dbtype . " LIKE '%" . $name . "%'";
$result = $db->query($query);
$row = $result->fetch_all();
$row_count = count($row);

function display_search_results($row) {
	if ($row) {
		foreach ($row as $key => $value) {
			echo '<li><a href="?page=user_page&user_id=' . $value[1] . '">' . $value[0] . ' ( \'' . trim($value[2]) . '\' ) </a></li>';
		}
	} else {
		echo '<li>Geen resultaten</li>';
	}
}

function num_results($row_count) {
		if ($row_count > 1) {
			$verb = 'zijn';
			$adjective = 'resulaten';
		} else {
			$verb = 'is';
			$adjective = 'resultaat';
		}
		echo 'Er ' . $verb . ' ' . $row_count . ' ' . $adjective . ' gevonden';
	}