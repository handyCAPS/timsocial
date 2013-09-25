<?php include "scripts/header.php"; ?>
	<section id="mainContent">
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
<?php include "scripts/footer.php" ?>