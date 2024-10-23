<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="blog">
        <div class="content-width">

            <?php 
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'future',
                'posts_per_page' => -1,  
                'paged' => get_query_var('paged')
            );
            $wp_query = new WP_Query($args);
            if($wp_query->have_posts()): 
                ?>

                <h3><?php _e('Coming up', 'Genex') ?></h3>
                <div class="content">

                    <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <?php get_template_part('parts/content', 'post', ['url' => true]) ?>
                    <?php endwhile; ?>

                </div>

                <?php 
            endif;
            wp_reset_query(); 
            ?>

            <?php 
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'publish',
                'posts_per_page' => -1,  
                'paged' => get_query_var('paged')
            );
            $wp_query = new WP_Query($args);
            if($wp_query->have_posts()): 
                ?>

                <h3><?php _e('Past events', 'Genex') ?></h3>
                <div class="content">

                    <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <?php get_template_part('parts/content', 'post') ?>
                    <?php endwhile; ?>

                </div>

                <?php 
            endif;
            wp_reset_query(); 
            ?>

        </div>
    </section>

    <?php endif; ?>