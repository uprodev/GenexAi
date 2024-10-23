<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => -1,  
        'paged' => get_query_var('paged')
    );
    $wp_query = new WP_Query($args);
    if($wp_query->have_posts()): 
        ?>

        <section class="blog blog-shadow">
            <div class="content-width">
                <div class="content">

                    <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <?php get_template_part('parts/content', 'post') ?>
                    <?php endwhile; ?>

                </div>
            </div>
        </section>

        <?php 
    endif;
    wp_reset_query(); 
    ?>

    <?php endif; ?>