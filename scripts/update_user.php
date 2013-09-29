<?php
require_once 'db/connection.php';

$user_id			= $_REQUEST['user_id'];
$user_name 			= $_REQUEST['user_name'];
$user_email 		= $_REQUEST['user_email'];
$user_screen_name 	= $_REQUEST['user_screen_name'];
$user_bio 			= $_REQUEST['user_bio'];

$db = new tiso_mysqli();
$update_query = "UPDATE users SET user_name = '$user_name', user_email = '$user_email', user_screen_name = '$user_screen_name', user_bio = '$user_bio' WHERE user_id = $user_id ";
$db->query($update_query);

header("Location:http://localhost/timsocial?page=user_page&user_id=$user_id");

