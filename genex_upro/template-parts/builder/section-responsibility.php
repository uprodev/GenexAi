<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php 
    switch ($background) {
        case 'White':
        $section_class = ' bg-white';
        $link_class = 'btn-border btn-border-black';
        break;

        default:
        $section_class = '';
        $link_class = 'btn-white';
        break;
    }
    ?>

    <section class="responsible<?= $section_class ?>">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="text">

                <?php if ($title): ?>
                    <h2><?= $title ?></h2>
                <?php endif ?>

                <?= $text ?>

                <?php if ($link): ?>
                    <div class="btn-wrap">
                        <a href="<?= $link['url'] ?>" class="<?= $link_class ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    </div>
                <?php endif ?>

            </div>
            <figure>

                <?php if ($image): ?>
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                <?php endif ?>

                <?php if (is_array($items) && checkArrayForValues($items)): ?>
                <div class="info">

                    <?php foreach ($items as $index => $item): ?>
                        <?php if ($item['title'] || $item['text']): ?>
                            <div class="line line-<?= $index + 1 ?>">

                                <?php if ($item['title']): ?>
                                    <h6><?= $item['title'] ?></h6>
                                <?php endif ?>
                                
                                <?php if ($item['text']): ?>
                                    <p><?= $item['text'] ?></p>
                                <?php endif ?>
                                
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>

                </div>
            <?php endif ?>

        </figure>
    </div>
</section>

<?php endif; ?>