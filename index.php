<?php require_once "scripts/get_menu.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Social Network</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
</head>
<body>
<div id="outerWrap">
	<header>
		<a href="http://localhost/timsocial"><h1>My Social Network</h1></a>
		
	</header>
	<section id="mainContent">
		<nav>
			<ul id="getMenu">
				<?php list_users(); ?>
			</ul>
		</nav>
		<section id="entryFormWrap">
			<form id="entryForm">
				<label for="name">Naam :</label>
				<input type="text" id="name"><br>
				<label for="email">Email :</label>
				<input type="text" id="email"><br>
				<label for="screen_name">Screen Name :</label>
				<input type="text" id="screenName"><br>
				<label for="bio">Bio :</label>
				<textarea rows="8" id="bio"></textarea><br>
			</form><!--  end entryForm  -->
			<button id="ajaxCall">Submit</button>
		</section><!--  end entryFormWrap  -->
		<section id="ajaxTarget">
			
		</section><!--  end ajaxTarget  -->
	</section><!--  end mainContent  -->
</div><!--  end outerWrap  -->

<!-- ajax  -->

<script type="text/javascript" src="js/ajax.js"></script>

</body>
</html>