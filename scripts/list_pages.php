<?php
function list_pages() {
	require_once "db/connection.php";

	$db = new tiso_mysqli();
	$query = "SELECT page_name, page_nice_name FROM pages";
	$result = $db->query($query);
	$arrays = $result->fetch_all();

	for ($i = 0; $i <= count($arrays)-1; $i++) {
		echo '<li><a href="index.php?page='. $arrays[$i][0] . '">' . $arrays[$i][1] . '</a></li>';
	}
}