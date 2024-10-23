<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="research-team">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="content">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>
                
                <?= $text ?>

                <?php if ($link): ?>
                    <div class="btn-wrap">
                        <a href="<?= $link['url'] ?>" class="btn-white"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    </div>
                <?php endif ?>
                
                <?php if ($image): ?>
                    <figure>
                        <?= wp_get_attachment_image($image['ID'], 'full') ?>
                    </figure>
                <?php endif ?>
                
                <?php if (is_array($bottom) && checkArrayForValues($bottom)): ?>

                <?php if ($bottom['title']): ?>
                    <h2><?= $bottom['title'] ?></h2>
                <?php endif ?>

                <?= $bottom['text'] ?>

                <?php if ($bottom['link_1'] || $bottom['link_2']): ?>
                    <div class="btn-wrap">

                        <?php if ($bottom['link_1']): ?>
                            <a href="<?= $bottom['link_1']['url'] ?>" class="btn-white"<?php if($bottom['link_1']['target']) echo ' target="_blank"' ?>><?= $bottom['link_1']['title'] ?></a>
                        <?php endif ?>

                        <?php if ($bottom['link_2']): ?>
                            <a href="<?= $bottom['link_2']['url'] ?>" class="btn-border"<?php if($bottom['link_2']['target']) echo ' target="_blank"' ?>><?= $bottom['link_2']['title'] ?></a>
                        <?php endif ?>

                    </div>
                <?php endif ?>
                
            <?php endif ?>

        </div>
    </div>
</section>

<?php endif; ?>