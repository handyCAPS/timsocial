<?php
require_once "db/connection.php";

$name 			= trim($_REQUEST['name']);
$email 			= trim($_REQUEST['email']);
$screen_name 	= trim($_REQUEST['screen_name']);
$bio 			= trim($_REQUEST['bio']);
$db 			= new tiso_mysqli;

function check_screen_name($check_user_screen_name) {
	
	$query = "SELECT user_screen_name FROM users;";
	$result = $db->query($query);
	$row = $result->fetch_all();
	$name_free = true;
	$i = count($row)-1;

	return $row;
	
	// while ($i >= 0) {
	// 		if($row[$i] === $check_user_screen_name) {
	// 			$name_free = false;
	// 		}
	// 		$i--;
	// 	}

	// 	return $name_free;

}

function fill_database($user_name, $user_email, $user_screen_name, $user_bio, $db) {
	
	$user_name = $db->real_escape_string($user_name);
	$user_email = $db->real_escape_string($user_email);
	$user_screen_name = $db->real_escape_string($user_screen_name);
	$user_bio = $db->real_escape_string($user_bio);

	// $free = check_screen_name($user_screen_name);
		$query = " INSERT INTO users (user_name, user_email, user_screen_name, user_bio) VALUES ( ' $user_name ' , ' $user_email ' , ' $user_screen_name ' , ' $user_bio ');";
			$db->query($query);

}

function return_form_info($user_name, $user_email, $user_screen_name, $user_bio, $db) {

	$header 		= "<h2>{$user_name}</h2>";
	$body 			= "<article>
							<p>Call me : {$user_screen_name}</p>
							<p>Email me at : {$user_email}</p>
							<p>Something about me :<br> {$user_bio}</p>
							<div id='homeLink'>
							<a href='/timsocial/views?user_id=" . $db->insert_id .  "'>Ga naar profiel</a>
							</div>
						</article>";

	echo '<div>' . $header . $body  . '</div>';


}

fill_database($name, $email, $screen_name, $bio, $db);
return_form_info($name, $email, $screen_name, $bio, $db);

