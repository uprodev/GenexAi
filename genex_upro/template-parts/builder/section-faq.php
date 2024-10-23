<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    $title = get_field('title_5', 'option');
    $items = get_field('items_5', 'option');
    $link = get_field('link_5', 'option');
    ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="faq">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="content">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>
                
                <ul class="accordion">

                    <?php foreach ($items as $item): ?>
                        <?php if ($item['title'] && $item['text']): ?>
                            <li class="accordion-item">
                                <div class="accordion-thumb"><p><?= $item['title'] ?></p></div>
                                <div class="accordion-panel">
                                    <div class="wrap"><?= $item['text'] ?></div>
                                </div>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                    
                </ul>

                <?php if ($link): ?>
                    <div class="vie-all">
                        <a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    </div>
                <?php endif ?>

            </div>
        </div>
    </section>
<?php endif ?>

<?php endif; ?>