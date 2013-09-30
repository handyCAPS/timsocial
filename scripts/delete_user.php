<?php

require_once 'db/connection.php';

$db = new tiso_mysqli();
$user_id = $_REQUEST['user_id'];

$query = "DELETE FROM users WHERE user_id = '$user_id'";
$db->query($query);

// if (is_object($result)) {
// 	echo 'User succesfully deleted !';
// }

header('Location: http://localhost/timsocial');

