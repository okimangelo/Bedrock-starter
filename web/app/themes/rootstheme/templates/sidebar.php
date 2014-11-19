<?php $parent_ID = wp_get_post_parent_id(get_the_ID()); ?>
<aside class="sidebar-left col-md-3 col-xs-10 col-xs-offset-1 col-md-offset-1" role="complementary">
    <?php dynamic_sidebar('sidebar-primary'); ?>
    <h3 class="nav-title">
        <?php echo (get_field('sidebar_menu_title',$parent_ID)) ? get_field('sidebar_menu_title',$parent_ID) : get_the_title(); ?>
    </h3>
    <?php
    /*
     * Get the ACF Sidebar Menu setting of the parent page
     * Fall back to default Primary Navigation if not set
     */
    $menu_id = (get_field('sidebar_menu_name',$parent_ID)) ? get_field('sidebar_menu_name',$parent_ID): 'Primary Navigation';
    $args = array(
        'theme_location'  => '',
        'menu'            => $menu_id,
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );

    echo wp_nav_menu( $args );
    ?>
</aside>

