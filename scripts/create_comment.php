<?php

require_once 'db/connection.php';

$db = new tiso_mysqli();

$user_id 		= $db->real_escape_string($_REQUEST['user_id']);
$mesa_user 		= $db->real_escape_string($_REQUEST['mesa_user']);
$mesa_poster 	= $db->real_escape_string($_REQUEST['mesa_poster']);
$mesa_content 	= $db->real_escape_string($_REQUEST['mesa_content']);
function store_comments($user_id, $mesa_user, $mesa_poster, $mesa_content, $db) {
	$mesa_time = date('j m Y H:i:s');
	$mesa_insert_query = "INSERT INTO messages (mesa_user, mesa_poster, mesa_content, mesa_time) VALUES ('$user_id', '$mesa_poster', '$mesa_content', '$mesa_time') ";
	$db->query($mesa_insert_query);
}

store_comments($user_id, $mesa_user, $mesa_poster, $mesa_content, $db);
header("Location: http://localhost/timsocial/index.php?page=user_page&user_id=$user_id");