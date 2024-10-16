<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="home-banner">
        <div class="content-width">
            <div class="text">

                <?php if ($title): ?>
                    <h1><?= $title ?></h1>
                <?php endif ?>

                <?= $text ?>

                <?php if ($link_1 || $link_2): ?>
                    <div class="btn-wrap">

                        <?php if ($link_1): ?>
                            <a href="<?= $link_1['url'] ?>" class="btn-white"<?php if($link_1['target']) echo ' target="_blank"' ?>><?= $link_1['title'] ?></a>
                        <?php endif ?>

                        <?php if ($link_2): ?>
                            <a href="<?= $link_2['url'] ?>" class="btn-border"<?php if($link_2['target']) echo ' target="_blank"' ?>><?= $link_2['title'] ?></a>
                        <?php endif ?>

                    </div>
                <?php endif ?>

            </div>

            <?php if($gallery): ?>

                <figure>

                    <?php foreach($gallery as $index => $image): ?>

                        <?php $class = 'img-' . strval($index + 1) ?>

                        <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                            <img class="<?= $class ?>" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <?php else: ?>
                            <?= wp_get_attachment_image($image['ID'], 'full', false, array('class' => $class)) ?>
                        <?php endif ?>

                    <?php endforeach; ?>

                </figure>

            <?php endif; ?>

        </div>
    </section>

    <?php endif; ?>