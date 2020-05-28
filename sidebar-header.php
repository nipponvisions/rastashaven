<?php
/**
* template name: sidebar-header
* Description : The header sidebar
* use this sidebar  to  display things in the header section
* https://developer.wordpress.org/themes/functionality/sidebars/
**/
?>

<div id="sidebar-header" class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
        <?php dynamic_sidebar( 'header' ); ?>
    <?php else : ?>
       <h3>Quote of the Day </h3>
       <h3>  Rasta Man Liveup !!! </h3>
    <?php endif; ?>
</div>










