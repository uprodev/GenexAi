<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="faq-banner">
        <div class="content-width">
            <div class="text">

                <?php if ($args['index'] == 0 && !is_front_page()): ?>
                    <?php get_template_part('parts/breadcrumbs') ?>
                <?php endif ?>

                <?php if ($title): ?>
                    <h1><?= $title ?></h1>
                <?php endif ?>

                <?= $text ?>

            </div>
        </div>
    </section>

    <?php endif; ?>