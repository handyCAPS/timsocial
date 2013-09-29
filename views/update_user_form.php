
<section class="entryFormWrap" id="updateUserForm">
	<form id="entryForm" method="POST" action="scripts/update_user.php">
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		<label for="name">Naam :</label>
		<input type="text" id="name" name="user_name" value="<?php echo $user_name; ?>"><br>
		<label for="email">Email :</label>
		<input type="text" id="email" name="user_email" value="<?php echo $user_email; ?>"><br>
		<label for="screen_name">Screen Name :</label>
		<input type="text" id="screenName" name="user_screen_name" value="<?php echo $user_screen_name; ?>"><br>
		<label for="bio">Bio :</label>
		<textarea rows="8" id="bio" name="user_bio"><?php echo $user_bio; ?></textarea><br>
		<input type="submit" value="Update" id="updateButton" class="bottom_button">
	</form><!--  end entryForm  -->
</section>
