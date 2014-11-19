<?php while (have_posts()) : the_post(); ?>
<div class="content-sidebar-wrapper clearfix">
    <?php get_template_part('templates/sidebar');?>
    <div class="content-wrapper col-md-7 col-md-offset-0 col-xs-10 col-xs-offset-1 bordered-left">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
</div>
<?php endwhile; ?>