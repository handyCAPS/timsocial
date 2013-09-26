<?php require_once '../scripts/header.php'; ?>

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
<?php include "../scripts/footer.php"; ?>