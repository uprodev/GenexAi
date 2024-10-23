<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    $title = get_field('title_3', 'option');
    $items = get_field('items_3', 'option');
    ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="faq-3x">
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

                <?php foreach ($items as $index => $item): ?>

                    <?php if ($index % 2 == 0): ?>
                     <div class="item"> 
                     <?php endif ?>

                     <ul class="accordion">
                        <li class="accordion-item">

                            <?php if ($item['title']): ?>
                                <div class="accordion-thumb"><p><?= $item['title'] ?></p></div>
                            <?php endif ?>
                            
                            <?php if ($item['text']): ?>
                                <div class="accordion-panel">
                                    <div class="wrap"><?= $item['text'] ?></div>
                                </div>
                            <?php endif ?>
                            
                        </li>
                    </ul>

                    <?php if ($index % 2 != 0 || $index == count($items) - 1): ?>
                    </div> 
                <?php endif ?>

            <?php endforeach ?>

        </div>
    </div>
</section>
<?php endif ?>

<?php endif; ?>