<?php

require_once "db/connection.php";

$db = new tiso_mysqli();

$term = $_GET['term'];
$type = $_GET['type'];

if ($type === 'Screen Name') {
	$dbtype = 'user_screen_name';
} else if ($type === 'User Name') {
	$dbtype = 'user_name';
} else {
	$dbtype = 'user_name';
}

$query = "SELECT $dbtype FROM users WHERE $dbtype LIKE '%$term%'";
$result = $db->query($query);
$row = $result->fetch_all();
function get_the_names($row) {
	$names = array();
	foreach ($row as $key => $value) {
		$names[] = $value[0];
	}
	return $names;
}

echo json_encode(get_the_names($row));
