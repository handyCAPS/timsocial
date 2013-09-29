<?php
require_once "db/connection.php";

$name 			= trim($_REQUEST['name']);
$email 			= trim($_REQUEST['email']);
$screen_name 	= trim($_REQUEST['screen_name']);
$bio 			= trim($_REQUEST['bio']);
$db 			= new tiso_mysqli;

$name = $db->real_escape_string($name);
$email = $db->real_escape_string($email);
$screen_name = $db->real_escape_string($screen_name);
$bio = $db->real_escape_string($bio);

function check_screen_name($check_user_screen_name, $db) {
	
	$query = "SELECT user_screen_name FROM users WHERE user_screen_name = '$check_user_screen_name'";
	$result = $db->query($query);
	$rowcount = $result->num_rows;
	
	return $rowcount == 0;
}


function return_form_info($user_name, $user_email, $user_screen_name, $user_bio, $db) {

	if (check_screen_name($user_screen_name, $db)) {
		$query = "INSERT INTO users (user_name, user_email, user_screen_name, user_bio)
		          VALUES ( '$user_name', '$user_email', '$user_screen_name', '$user_bio')";
			$db->query($query);
	}

	$header 		= "<h2>{$user_name}</h2>";
	$body 			= "<article>
							<p>Call me : {$user_screen_name}</p>
							<p>Email me at : {$user_email}</p>
							<p>Something about me :<br> {$user_bio}</p>
							<div id='homeLink'>
							<a href='/timsocial?page=user_page&user_id=" . $db->insert_id .  "'>Ga naar profiel</a>
							</div>
						</article>";

	if ($db->insert_id != 0) {
		echo '<div>' . $header . $body  . '</div>';
	} else {
		echo 'Deze user name bestaat al !';
	}


}

return_form_info($name, $email, $screen_name, $bio, $db);


