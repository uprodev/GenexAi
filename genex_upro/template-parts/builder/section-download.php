<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    switch ($background) {
        case 'Grey':
        $section_class = 'download-white-paper';
        break;

        default:
        $section_class = 'download';
        break;
    }
    ?>

    <section class="<?= $section_class ?>">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <?php if ($image && !$is_right_picture): ?>
                <figure>
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                </figure>
            <?php endif ?>
            
            <div class="text">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>

                <?= $text ?>

                <?php if ($link): ?>
                    <div class="btn-wrap">
                        <a href="<?= $link['url'] ?>" class="btn-border btn-border-black<?php if($is_popup) echo ' fancybox' ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    </div>
                <?php endif ?>

            </div>

            <?php if ($image && $is_right_picture): ?>
                <figure>
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                </figure>
            <?php endif ?>
            
        </div>
    </section>

    <?php endif; ?>