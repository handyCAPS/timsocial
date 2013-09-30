<?php 
	require_once "scripts/list_pages.php";
	require_once "scripts/authorization.php";
	
	if (isset($_REQUEST['page'])) {
		$page = $_REQUEST['page'];
		switch ($page) {
			case 'user_page':
				require_once 'scripts/get_user.php';
				require_once 'scripts/get_comments.php';
				break;
			case 'list_users':
				require_once 'scripts/get_user.php';
				break;
			case 'update_user_form':
				require_once 'scripts/get_user.php';
				break;
			case 'search_results':
				require_once 'scripts/get_search_result.php';
				break;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
	<?php 
		if (isset($user_name)) {
			echo 'Profiel ' . $user_name;
		} else {
			echo "My Social Network";
		}
	 ?>
	</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
</head>
<body>
<div id="outerWrap">
	<header>
		<a href="http://localhost/timsocial"><h1>My Social Network</h1></a>
		<form name="searchForm" method="POST" action="index.php?page=search_results">
			<label for="searchBox" id="searchLabel">Zoek naar :</label>
			<input type="text" id="searchBox" name="searchBox">
			<select name="searchFor" id="searchType">
				<option>User Name</option>
				<option selected="true">Screen Name</option>
			</select>
			<input type="submit" value="Zoek !">
		</form>

	</header>
		<nav>
			<ul id="getMenu">
				<?php list_pages(); ?>
			</ul>
		</nav>
		