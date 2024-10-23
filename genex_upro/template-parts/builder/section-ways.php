<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    $title = get_field('title_2', 'option');
    $items = get_field('items_2', 'option');
    ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>

    <?php 
    switch ($background_color) {
        case 'Violet':
        $add_class = 'bg-violet';
        break;
        
        default:
        $add_class = '';
        break;
    }
    ?>

    <section class="item-3x<?php if($add_class) echo ' ' . $add_class ?>">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <?php if ($title): ?>
                <div class="title-wrap">
                    <h2><?= $title ?></h2>
                </div>
            <?php endif ?>
            
            <div class="content">

                <?php foreach ($items as $item): ?>
                    <div class="item">

                        <?php if ($item['label']): ?>
                            <p class="top"><?= $item['label'] ?></p>
                        <?php endif ?>
                        
                        <?php if ($item['number']): ?>
                            <p class="number">
                                <?= $item['number'] ?> 

                                <?php if ($item['icon']): ?>
                                    <?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
                                        <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                    <?php else: ?>
                                        <?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
                                    <?php endif ?>
                                <?php endif ?>

                            </p>
                        <?php endif ?>

                        <?php if ($item['title']): ?>
                            <p class="text"><?= $item['title'] ?></p>
                        <?php endif ?>

                        <?php if ($item['text']): ?>
                            <p><?= $item['text'] ?></p>
                        <?php endif ?>

                    </div>
                <?php endforeach ?>
                
            </div>
        </div>
    </section>
<?php endif ?>

<?php endif; ?>