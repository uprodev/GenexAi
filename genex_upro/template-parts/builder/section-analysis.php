<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="graph-block">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="title-wrap">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>
                
                <?php if ($subtitle): ?>
                    <h3 class="sub-title"><?= $subtitle ?></h3>
                <?php endif ?>
                
                <?= $text ?>

            </div>

            <?php if ($image || $image_mobile): ?>
                <figure>

                    <?php if ($image): ?>
                        <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <?php else: ?>
                            <?= wp_get_attachment_image($image['ID'], 'full') ?>
                        <?php endif ?>
                    <?php endif ?>

                    <?php if ($image_mobile): ?>
                        <?php if (pathinfo($image_mobile['url'])['extension'] == 'svg'): ?>
                            <img class="mob" src="<?= $image_mobile['url'] ?>" alt="<?= $image_mobile['alt'] ?>">
                        <?php else: ?>
                            <?= wp_get_attachment_image($image_mobile['ID'], 'full', false, array('class' => 'mob')) ?>
                        <?php endif ?>
                    <?php endif ?>

                </figure>
            <?php endif ?>
            
        </div>
    </section>

    <?php endif; ?>