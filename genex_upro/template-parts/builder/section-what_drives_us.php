<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="drives">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <?php if ($title): ?>
                <h2><?= $title ?></h2>
            <?php endif ?>

            <?php foreach ($items as $item): ?>
                <?php if ($item['title'] || $item['text']): ?>
                    <div class="item">

                        <?php if ($item['title']): ?>
                            <div class="title-wrap">
                                <h3><?= $item['title'] ?></h3>
                            </div>
                        <?php endif ?>
                        
                        <?php if ($item['text']): ?>
                            <div class="text"><?= $item['text'] ?></div>
                        <?php endif ?>
                        

                    </div>
                <?php endif ?>
            <?php endforeach ?>

        </div>
    </section>
<?php endif ?>

<?php endif; ?>