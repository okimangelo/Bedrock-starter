
    <div id="latest-news">
        <?php
        $args = array('post_type'=> 'news',
            'order' => 'ASC',
            'orderby' => 'menu_order',
        );
        query_posts( $args );
        while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <div class="news-post">
                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>
                <div class="inner-padding">
                    <div class="content">
                        <?php the_excerpt();?>
                        <div class="news-link">
                            <a href="<?php echo get_permalink(); ?>">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
