<section id="contentWrap">
	<section id="searchResults">
		<h2>Resultaten van uw zoekopdracht :<br>
		<?php echo $type . ' : ' . $name ?> </h2>
		<h3><?php num_results($row_count); ?></h3>
		<ul>
			<?php display_search_results($row); ?>
		</ul>
	</section><!--  end searchResults  -->
</section>