<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="pricing-banner">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <?php if ($title): ?>
                <h1><?= $title ?></h1>
            <?php endif ?>

            <?php if (is_array($items) && checkArrayForValues($items)): ?>
            <div class="item-wrap">

                <?php foreach ($items as $item): ?>
                    <div class="item-3">

                        <?php if ($item['title']): ?>
                            <h2><?= $item['title'] ?></h2>
                        <?php endif ?>
                        
                        <?php if ($item['solutions']): ?>
                            <h6><?php _e('Solutions', 'Genex') ?></h6>
                            <?= add_class_content($item['solutions'], '', '', 'list-point') ?>
                        <?php endif ?>
                        
                        <?php if ($item['includes']): ?>
                            <h6><?php _e('Includes', 'Genex') ?></h6>
                            <?= add_class_content($item['includes'], '', '', 'list-check') ?>
                        <?php endif ?>

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
        <?php endif ?>

        <?php if (is_array($bottom) && checkArrayForValues($bottom)): ?>
        <div class="item">
            <div class="title">

                <?php if ($bottom['title']): ?>
                    <h2><?= $bottom['title'] ?></h2>
                <?php endif ?>
                
                <?= $bottom['text'] ?>

            </div>

            <?php if ($bottom['link']): ?>
                <div class="btn-wrap">
                    <a href="<?= $bottom['link']['url'] ?>" class="btn-border btn-border-black"<?php if($bottom['link']['target']) echo ' target="_blank"' ?>><?= $bottom['link']['title'] ?></a>
                </div>
            <?php endif ?>

        </div>
    <?php endif ?>
    
</div>
</section>

<?php endif; ?>