<?php
/*template name: sidebar
*/
?>

<div class="sidebar">
	<h2> this is sidebar </h2>
	<?php
		if(is_active_sidebar('sidebar-1')){

			 dynamic_sidebar();
		}
		else{
			// Time to add some widgets! 
		}
	?>
</div><!--sidebar-->
