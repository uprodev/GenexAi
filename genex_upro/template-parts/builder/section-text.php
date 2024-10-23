<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="img-text">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="content">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>
                
                <?php if ($text): ?>
                    <div class="text-wrap"><?= $text ?></div>
                    <a href="#" class="show-more">
                        <span><?php _e('Read more', 'Genex') ?></span>
                        <span><?php _e('Hide', 'Genex') ?></span>
                        <i class="fa-regular fa-chevron-down"></i>
                    </a>
                <?php endif ?>
                
            </div>
        </div>
    </section>

    <?php endif; ?>