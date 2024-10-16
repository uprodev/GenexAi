<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if (is_array($items) && checkArrayForValues($items)): ?>
    <section class="item-3x">
        <div class="content-width">

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