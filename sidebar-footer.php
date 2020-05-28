<?php
/**
* template name: sidebar-footer
* Description : The footer sidebar
* use this sidebar  to  display things in the footer section
* https://developer.wordpress.org/themes/functionality/sidebars/
**/
?>
<div id="sidebar-footer" class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
        <?php dynamic_sidebar( 'footer' ); ?>
    <?php else : ?>
       <h3>This is footer sidebar </h3>
       <h3>  Haloo world  </h3>
    <?php endif; ?>
</div>

