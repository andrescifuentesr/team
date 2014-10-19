<div id="sb-search" class="sb-search">
	<form role="search" method="get" class="search-form" action="http://localhost:8888/team/">
	<!-- <form role="search" method="get" class="search-form" action="http://www.team-mundus.eu"> -->
		<label class="screen-reader-text" for="s">'Search for:</label>
		<input class="sb-search-input" type="text" name="s" id="search" placeholder="Search …" value="<?php the_search_query(); ?>" title="Search for:" />
		<input class="sb-search-submit" type="submit" id="searchsubmit" value="Search" />
		<span class="sb-icon-search"></span>
	</form>
</div>