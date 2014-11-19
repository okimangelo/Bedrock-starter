<?php
/*
Template Name: Page - Latest News
*/
?>

    <div class="content-sidebar-wrapper clearfix">
        <div class="content-wrapper col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
        <?php while (have_posts()) : the_post();
                get_template_part('templates/page', 'header');
            endwhile; ?>
            <?php get_template_part('templates/cpt', 'news'); ?>
        </div>
    </div>
