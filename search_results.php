<?php

include "scripts/header.php";

require_once "scripts/get_search_result.php";

?>
<div id="contentWrap">
	<section id="searchResults">
		<h2>Resultaten van uw zoekopdracht : </h2>
		<h3><?php num_results($row_count); ?></h3>
		<ul>
			<?php display_search_results($row); ?>
		</ul>
	</section><!--  end searchResults  -->
</div><!--  end contentWrap  -->