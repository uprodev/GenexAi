<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="title-btn">
        <div class="content-width">
            <div class="content">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>

                <?php if ($text): ?>
                    <h6><?= $text ?></h6>
                <?php endif ?>

                <div class="btn-wrap">

                    <?php if ($button): ?>
                        <a href="#requested" class="btn-white fancybox"><?= $button ?></a>
                    <?php endif ?>

                    <?php if ($link): ?>
                        <a href="<?= $link['url'] ?>" class="btn-border"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>