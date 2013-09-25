<?php include "scripts/header.php";
		require_once "scripts/get_user.php"; ?>
		
	<div id="contentWrap">
		<section>
			<h2><?php echo $user_screen_name; ?> (<?php echo $user_name; ?>)</h2>
			<button id="userEmail"><a href="mailto:<?php echo $user_email; ?>">Email Me</a></button>
			<p id="userBio"><?php echo $user_bio; ?></p>
		</section>
	</div><!--  end contentWrap  -->
<?php include "scripts/footer.php" ?>