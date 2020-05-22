<?php
/** 
* template name: page
**/


get_header(); 
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div> 

		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				the_title('<h2>','</h2>');
				// Post Content here
				the_content();
				//
			} // end while
		} // end if
		?>


<?php
 // get_sidebar(); 
 get_footer();

