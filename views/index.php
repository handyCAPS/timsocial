<?php require_once '../scripts/get_user.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiel <?php echo $user_name; ?></title>
	<link rel="stylesheet" type="text/css" href="../stylesheets/screen.css">
</head>
<body>

<div id="outerWrap">
	<header>
		<a href="http://localhost/timsocial"><h1>My Social Network</h1></a>
	</header>
	<div id="contentWrap">
		<section>
			<h2><?php echo $user_screen_name; ?></h2>
			<button id="userEmail"><a href="mailto:<?php echo $user_email; ?>">Email Me</a></button>
			<p id="userBio"><?php echo $user_bio; ?></p>
		</section>
	</div><!--  end contentWrap  -->
</div><!--  end outerWrap  -->

</body>
</html>