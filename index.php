<?php include "scripts/header.php"; ?>
	<section id="mainContent">
		<?php 
			if (isset($_REQUEST['page'])){
				$page = $_REQUEST['page'];
				include 'views/' . $page . '.php';
			} else {
				include 'views/frontpage.php';
			}
		 ?>
	</section><!--  end mainContent  -->
	
<?php include "scripts/footer.php" ?>