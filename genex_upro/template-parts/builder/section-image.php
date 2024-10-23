<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if ($image || $image_mobile): ?>
        <section class="img-block">
            <figure>

                <?php if ($image): ?>
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                <?php endif ?>

                <?php if ($image_mobile): ?>
                    <?= wp_get_attachment_image($image_mobile['ID'], 'full', false, array('class' => 'mob')) ?>
                <?php endif ?>
                
            </figure>
        </section>
    <?php endif ?>
    
    <?php endif; ?>