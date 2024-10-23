<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="team">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="title-wrap">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>

                <?= $text ?>

            </div>
            <div class="text-wrap">

                <?php foreach ($items as $item): ?>
                    <div class="item">

                        <?php if ($item['photo']): ?>
                            <figure>
                                <?= wp_get_attachment_image($item['photo']['ID'], 'full') ?>
                            </figure>
                        <?php endif ?>
                        
                        <div class="text">

                            <?php if ($item['position']): ?>
                                <p class="color"><?= $item['position'] ?></p>
                            <?php endif ?>

                            <?php if ($item['name']): ?>
                                <h3><?= $item['name'] ?></h3>
                            <?php endif ?>

                            <?= $item['text'] ?>

                            <?php if ($item['link']): ?>
                                <div class="link">
                                    <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </section>
<?php endif ?>

<?php endif; ?>