<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="blockquote-block">

        <?php if ($image || $image_mobile): ?>
            <figure>

                <?php if ($image): ?>
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                <?php endif ?>

                <?php if ($image_mobile): ?>
                    <?= wp_get_attachment_image($image_mobile['ID'], 'full', false, array('class' => 'mob')) ?>
                <?php endif ?>
                
            </figure>
        <?php endif ?>
        
        <?php if ($text): ?>
            <div class="content-width">
                <div class="content">
                    <blockquote>“<span><?= $text ?></span>”</blockquote>
                    <div class="user">

                        <?php if ($photo): ?>
                            <div class="user-img">
                                <?= wp_get_attachment_image($photo['ID'], 'full') ?>
                            </div>
                        <?php endif ?>

                        <div class="text">

                            <?php if ($name): ?>
                                <h6><?= $name ?></h6>
                            <?php endif ?>

                            <?php if ($position): ?>
                                <p><?= $position ?></p>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        
    </section>

    <?php endif; ?>