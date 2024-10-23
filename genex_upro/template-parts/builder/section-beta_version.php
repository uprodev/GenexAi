<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="pricing-banner">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <?php if ($title): ?>
                <h1><?= $title ?></h1>
            <?php endif ?>

            <?php foreach ($items as $item): ?>
                <div class="item">
                    <div class="title">

                        <?php if ($item['title']): ?>
                            <h2><?= $item['title'] ?></h2>
                        <?php endif ?>
                        
                        <?= $item['text'] ?>

                    </div>

                    <?php if ($item['link']): ?>

                        <?php 
                        switch ($item['link_color']) {
                            case 'White':
                            $link_class = 'btn-border btn-border-black';
                            break;

                            default:
                            $link_class = 'btn-white btn-blue';
                            break;
                        }
                        ?>

                        <div class="btn-wrap">
                            <a href="<?= $item['link']['url'] ?>" class="<?= $link_class ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                        </div>
                    <?php endif ?>

                </div>
            <?php endforeach ?>

        </div>
    </section>
<?php endif ?>


<?php endif; ?>