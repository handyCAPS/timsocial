<?php 
	require_once "scripts/get_menu.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
	<?php 
		if ($user_name) {
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
		<form name="searchForm" method="POST" action="search_results.php">
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
				<?php list_users(); ?>
			</ul>
		</nav>
		