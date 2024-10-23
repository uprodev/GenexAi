<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if($solutions): ?>

        <section class="solutions">
            <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

                <div class="content">

                    <?php if ($title || $text): ?>
                        <div class="title-wrap">

                            <?php if ($title): ?>
                                <h2><?= $title ?></h2>
                            <?php endif ?>
                            
                            <?= $text ?>

                        </div>
                    <?php endif ?>

                    <?php foreach($solutions as $post): 

                        global $post;
                        setup_postdata($post); ?>
                        <div class="item">

                            <?php if (has_post_thumbnail()): ?>
                             <figure>
                                <?php the_post_thumbnail('full') ?>
                            </figure> 
                        <?php endif ?>
                        
                        <div class="text">
                            <h3><?php the_title() ?></h3>

                            <?php $terms = wp_get_object_terms(get_the_ID(), 'solution_tag') ?>

                            <?php if (is_array($terms) && !empty($terms)): ?>
                            <ul class="label">

                                <?php foreach ($terms as $term): ?>
                                   <li><?= $term->name ?></li>   
                               <?php endforeach ?>
                               
                           </ul>
                       <?php endif ?>
                       
                       <?php if (has_excerpt()): ?>
                        <?php the_excerpt() ?>
                    <?php endif ?>

                </div>
            </div>
        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>

        <?php if ($link): ?>
            <div class="btn-wrap">
                <a href="<?= $link['url'] ?>" class="btn-border"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
            </div>
        <?php endif ?>

    </div>
</div>
</section>

<?php endif; ?>

<?php endif; ?>