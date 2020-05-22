<?php
/*template name: sidebar
*/
?>
<div class="sidebar">
	this is sidebar

	<?php
		if(is_active_sidebar('sidebar-1')){

			 dynamic_sidebar();
		}
	?>
	
</div><!--sidebar -->
