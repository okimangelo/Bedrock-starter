<?php
/*
Template Name: Page - Full Width
*/
?>
<?php while (have_posts()) : the_post(); ?>
<div class="content-sidebar-wrapper clearfix">    
    <div class="content-wrapper col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
</div>
<?php endwhile; ?>