<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    $title = get_field('title_4', 'option');
    $items = get_field('items_4', 'option');
    ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="client-say">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <?php if ($title): ?>
                <h2><?= $title ?></h2>
            <?php endif ?>
            
            <div class="content">

                <?php foreach ($items as $item): ?>
                    <?php if ($item['text']): ?>
                        <div class="item">
                            <div class="icon-wrap">
                                <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-4.svg" alt="">
                            </div>
                            <blockquote>"<span><?= $item['text'] ?></span></blockquote>

                            <?php if ($item['name']): ?>
                                <h6><?= $item['name'] ?></h6>
                            <?php endif ?>
                            
                            <?php if ($item['position']): ?>
                                <p><?= $item['position'] ?></p>
                            <?php endif ?>

                            <?php if ($item['location']): ?>
                                <p><?= $item['location'] ?></p>
                            <?php endif ?>

                        </div>
                    <?php endif ?>
                <?php endforeach ?>
                
            </div>
        </div>
    </section>
<?php endif ?>

<?php endif; ?>