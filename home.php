<?php
/* template name:home
*/

get_header();
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div> 



<div class ="ras_gallery">
	<div class="left_image">
		<ul> 
			<li> <img src="<?php echo get_stylesheet_directory_uri()?>/assets/ras_hood.jpg" alt="ras_hood"> </li>
			<li> <p> some text  </p> </li>
		</ul>
	</div>
	<div class="right_image">
		<div class="top">
			<ul> 
				<li> <img   src="<?php echo get_stylesheet_directory_uri()?>/assets/ras_hood.jpg" alt="ras_hood"> </li>
				
			</ul> 
		</div><!--top-->
		<div class ="bottom"> 
			<ul> 
				<li> <img   src="<?php echo get_stylesheet_directory_uri()?>/assets/ras_hood.jpg" alt="ras_hood"> </li>
				<li> <p> some text  </p> </li>
			</ul>
		</div><!--bottom-->
	</div><!--right_image -->
</div><!-- ras_gallery -->

		<div class="below_ras_gallery">

			<h2>some text</h2>
			<p> What is Lorem Ipsum? </p>

		</div>


<div class="ras_columns_4">
	<div class="ras_col">
	<ul> 
	<li> <img   src="<?php echo get_stylesheet_directory_uri()?>/assets/barret_hat.jpg" alt="barret_hat"> </li>
	<li> <p> some text  </p> </li>
	</ul> 
	</div>
	<div class="ras_col">
	<ul>
	<li> <img  src="<?php echo get_stylesheet_directory_uri()?>/assets/ras_shoes.jpg" alt="ras_shoes"> </li>
	<li> <p> Some text <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p></li>
	</ul> 
	</div>
	<div class="ras_col">
	<ul>
	<li> <img   src="<?php echo get_stylesheet_directory_uri()?>/assets/reggae_scarf.jpg" alt="reggae_scarf"> </li>
	<li> <p> Some text <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p></li>
	</ul>


	</div>
	<div class="ras_col">
	<ul>
	<li> <img  src="<?php echo get_stylesheet_directory_uri()?>/assets/ras_hood.jpg" alt="ras_hood"> </li>
	<li> <p> Some text <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>

	</ul>
	</div>
</div><!--ras_columns_4 -->




<?php get_footer(); ?>

		
