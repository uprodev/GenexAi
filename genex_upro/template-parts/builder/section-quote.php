<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if ($text): ?>

        <?php 
        switch ($background) {
            case 'White':
            $class = ' bg-white';
            break;
            
            default:
            $class = '';
            break;
        }
        ?>

        <section class="blockquote-block pt-125<?= $class ?>">
            <div class="content-width">

                <?php if ($args['index'] == 0 && !is_front_page()): ?>
                    <?php get_template_part('parts/breadcrumbs') ?>
                <?php endif ?>

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
        </section>
    <?php endif ?>

    <?php endif; ?>