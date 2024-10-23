<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    $title = get_field('title_1', 'option');
    $text = get_field('text_1', 'option');
    $link = get_field('link_1', 'option');
    $gallery = get_field('gallery_1', 'option');
    ?>

    <?php if($gallery): ?>

        <section class="logo-block">
            <div class="content-width">

                <?php if ($args['index'] == 0 && !is_front_page()): ?>
                    <?php get_template_part('parts/breadcrumbs') ?>
                <?php endif ?>

                <div class="title-wrap">

                    <?php if ($title): ?>
                        <h3><?= $title ?></h3>
                    <?php endif ?>

                    <?php if ($is_text && $text): ?>
                        <p><?= $text ?></p>
                    <?php endif ?>
                    
                    <?php if ($is_link && $link): ?>
                        <a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    <?php endif ?>
                    
                </div>
                
                <div class="logo-wrap">

                    <?php foreach($gallery as $image): ?>

                      <div class="item">
                        <a href="#">
                            <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            <?php else: ?>
                                <?= wp_get_attachment_image($image['ID'], 'full') ?>
                            <?php endif ?>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php endif; ?>

<?php endif; ?>