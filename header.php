<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
		<title> <?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head();?>
    </head>
    
	<body>
		<div class="main_container">
			<header>

				<div id="header" class="header">

					<div class="header_flex">
						<div class="header_box">
							<div class="logo">
								<img  src="<?php echo get_stylesheet_directory_uri()?>/assets/logo_img.png" alt="rasflag"> 
							</div><!--logo-->
						</div><!--header_box-->


						<div class="header_box">
							<h1> <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> </h1>
							<div class="description">
								<h3> <?php bloginfo('description'); ?> </h3>
							</div> <!--description -->
						</div><!--header_box-->

						<div class="header_box">
							<nav class="handheld_menu">
								<span> Menu </span>
								<?php  wp_nav_menu(); ?> 
							</nav>	
						</div><!--header_box -->
					</div><!-- header_flex -->	

					<div class="banner">
						<img  src="<?php echo get_stylesheet_directory_uri()?>/assets/rasflag.gif" alt="rasflag"> 
					</div><!--banner-->
						<nav class="desktop_menu"> 
							<?php  wp_nav_menu(); ?>
						</nav>	

					<div class="ras_quote">
					<!-- 	see quote of the day in the widgets header -->
						<?php  get_sidebar('header'); ?>
					</div><!--ras_quote-->

					<div class="header_search">
						<!--woocommerce product search form -->
						<?php get_product_search_form(); ?>
					</div>
				
				</div><!--header -->
		</header>
		<div class="body_section_container">
