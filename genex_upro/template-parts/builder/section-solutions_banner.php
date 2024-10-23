<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="solutions-banner">
        <div class="content-width">
            <div class="text">

                <?php if ($args['index'] == 0 && !is_front_page()): ?>
                    <?php get_template_part('parts/breadcrumbs') ?>
                <?php endif ?>

                <?php if ($image_mobile): ?>
                    <figure class="mob">
                        <?= wp_get_attachment_image($image_mobile['ID'], 'full', false, array('class' => 'img-1')) ?>
                        <img src="<?= get_stylesheet_directory_uri() ?>/img/before-3.png" alt="" class="img-2">
                    </figure>
                <?php endif ?>
                
                <?php if ($title): ?>
                    <h1><?= $title ?></h1>
                <?php endif ?>
                
                <?= $text ?>

                <?php if ($link): ?>
                    <div class="btn-wrap">
                        <a href="<?= $link['url'] ?>" class="btn-white btn-violet"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    </div>
                <?php endif ?>

            </div>

            <?php if ($image): ?>
                <figure>
                    <?= wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'img-1')) ?>
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/before-3.png" alt="" class="img-2">
                </figure>
            <?php endif ?>
            
        </div>
    </section>

    <?php endif; ?>