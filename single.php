<?php
/**
*template name:single
* Description: display regular posts 
* never used by woocommerce 
**/

get_header();
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div> 



<div class="content-area">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			the_title('<h2>','</h2>');
			the_post_thumbnail();
			the_content();
			
			//
		} // end while
	} // end if
	?>
	</div>

<?php get_sidebar('Posts'); ?>

<?php get_footer(); ?>

		