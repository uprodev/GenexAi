<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if($gallery): ?>

        <section class="logo-block">
            <div class="content-width">

                <?php if ($title): ?>
                    <div class="title-wrap">
                        <h3><?= $title ?></h3>
                    </div>
                <?php endif ?>
                
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