<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="text-img">
        <div class="content-width">
            <div class="content">
                <div class="text">

                    <?php if ($title): ?>
                        <h2><?= $title ?></h2>
                    <?php endif ?>
                    
                    <?= $text ?>

                    <?php if ($link): ?>
                        <div class="btn-wrap">
                            <a href="<?= $link['url'] ?>" class="btn-white"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                        </div>
                    <?php endif ?>

                </div>

                <?php if ($image): ?>
                    <figure>
                        <?= wp_get_attachment_image($image['ID'], 'full') ?>
                    </figure>
                <?php endif ?>

            </div>
        </div>
    </section>

    <?php endif; ?>