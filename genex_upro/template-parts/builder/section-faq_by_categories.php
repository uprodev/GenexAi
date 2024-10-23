<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="faq faq-block">
        <div class="content-width">

            <?php if ($args['index'] == 0 && !is_front_page()): ?>
                <?php get_template_part('parts/breadcrumbs') ?>
            <?php endif ?>

            <div class="content">

                <?php foreach ($items as $item): ?>
                    <?php if (is_array($item['items']) && checkArrayForValues($item['items'])): ?>

                    <?php if ($item['title']): ?>
                        <h2><?= $item['title'] ?></h2>
                    <?php endif ?>
                    
                    <ul class="accordion">

                        <?php foreach ($item['items'] as $item_2): ?>
                            <?php if ($item_2['title'] || $item_2['text']): ?>
                                <li class="accordion-item">
                                    <div class="accordion-thumb"><p><?= $item_2['title'] ?></p></div>
                                    <div class="accordion-panel">
                                        <div class="wrap"><?= $item_2['text'] ?></div>
                                    </div>
                                </li>
                            <?php endif ?>
                        <?php endforeach ?>
                        
                    </ul>
                <?php endif ?>
            <?php endforeach ?>
            
        </div>
    </div>
</section>
<?php endif ?>

<?php endif; ?>