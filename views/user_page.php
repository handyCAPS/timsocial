
<div id="contentWrap">
	<section id="userContent">
		<h2><?php echo $user_screen_name; ?> ( <?php echo $user_name; ?> )</h2>
		<button id="userEmail"><a href="mailto:<?php echo $user_email; ?>">Email Me</a></button>
		<p id="userBio"><?php echo $user_bio; ?></p>
		<form method="POST" action="?page=update_user_form&user_id=<?php echo $user_id ?>">
			<input type="submit" value="Update" id="updateButton" class="bottom_button">
		</form>
	</section>
	<section id="comments">
		<?php get_comments(); ?>
	</section>
	<section>
		<h2>Leave a comment</h2>
		<form id="commentForm" class="entry_form" method="POST" action="scripts/create_comment.php">
			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			<input type="hidden" name="mesa_user" value="<?php echo $user_id; ?>">
			<label for="mesa_poster">Your Name</label>
			<input type="text" name="mesa_poster">
			<label for="mesa_content">Your comment</label>
			<textarea name="mesa_content" rows="8"></textarea>
			<input type="submit" value="submit" class="bottom_button">
		</form>
	</section>
</div><!--  end contentWrap  -->

