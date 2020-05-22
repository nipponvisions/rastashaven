<?php
/* name:search.php
*/

get_header();
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div> <?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		the_title('<h2>','</h2>');
		the_content();
		
		//
	} // end while
} // end if
get_footer(); ?>

		