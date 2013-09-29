<?php
function get_comments() {
	require_once 'db/connection.php';

	$db = new tiso_mysqli();
	$user_id = $_REQUEST['user_id'];

	$select_comments_query = "SELECT mesa_content, mesa_poster, mesa_time FROM messages WHERE mesa_user = '$user_id' ";
	$result = $db->query($select_comments_query);
	
	
	if (is_object($result)){
		$row = $result->fetch_all();
		for ($i = 0; $i <= count($row)-1; $i++) {
			echo '
				<article class="comment_wrap">
				<h2>' . $row[$i][1]  . ' Says :</h2>
				<p>' . $row[$i][0] . '</p>
				<footer>Posted ' . $row[$i][2] . '</footer>
				</article>
			';
		}
	}
}