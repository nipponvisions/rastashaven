<?php
/* template name:home
*/

get_header();
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div> 


<div class="ras_gallery_wrapper"> 
	<div class ="ras_gallery">
		<div class="left_image">
			<ul> 
				<li> <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/ras_hood.jpg" alt="ras_hood"> </li>
				<li> <p> <b> The King Lion Hood</b> <br>  The signature lion of Judah  </p> </li>
			</ul>
		</div>
		<div class="right_image">
			<div class="top">
				<ul> 
					<li> <img   src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/barret.jpg" alt="barret"> </li>
					
				</ul> 
			</div><!--top-->
			<div class ="bottom"> 
				<ul> 
					<li> <img   src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/ras_shoes.jpg" alt="ras_shoes"> </li>
					<li> <p> Ras Gear </p> </li>
				</ul>
			</div><!--bottom-->
		</div><!--right_image -->
	</div><!-- ras_gallery -->
</div><!--ras_gallery_wrapper -->

		<div class="below_ras_gallery">

			<h2>Introducing the Rastas Gear </h2>
			<h4> Wangwan Merchadise  you wont find anywhere else But Here  </h4>

		</div>


<div class='ras_columns_4'>
	<div class='ras_col' >
		<ul> 
			<li>
			 	<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/barret.jpg" alt="barret"> </li>
			<li>
				<p> <b> The Rastas Barret </b> <br>
			 	 Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
		
		</ul> 
	</div>
	<div class="ras_col">
		<ul>
			<li> <img  src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/bandana.png" alt="bandana_png"> </li>
			<li> <p> <b> Rastas Bandana </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p></li>
		</ul> 
	</div>
	<div class="ras_col">
		<ul>
			<li> <img  src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/reggae_scarf.jpg" alt="reggae_scarf"> </li>
			<li> <p> <b> Rastas Scarf </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p></li>
		</ul>
	</div>
	<div class="ras_col">
		<ul>
			<li> <img  src="<?php echo get_stylesheet_directory_uri()?>/assets/images/front_page/ras_flags.jpg" alt="ras_flags"> </li>
			<li> <p> <b> Ras Flags </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
		</ul>
	</div>
</div><!--ras_columns_4 -->

<?php get_footer(); ?>