<?php
/**
* template name: sidebar-footer
* Description : The footer sidebar
* use this sidebar  to  display things in the footer section
* https://developer.wordpress.org/themes/functionality/sidebars/
**/
?>
<div id="sidebar-footer" class="sidebar-header">
    <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
        <?php dynamic_sidebar( 'Footer Sidebar' ); ?>
    <?php else : ?>
       <h3>This is the footer sidebar </h3>
       <h3>  put footer stuff here  </h3>
    <?php endif; ?>
</div>

