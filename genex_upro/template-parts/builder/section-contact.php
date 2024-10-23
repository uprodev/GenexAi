<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <section class="contact">
        <div class="content-width">

            <?php if ($form): ?>
                <div class="form-wrap">

                    <?php if ($form_title): ?>
                        <h3><?= $form_title ?></h3>
                    <?php endif ?>
                    
                    <?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="form-default"]') ?>
                </div>
            <?php endif ?>

            <div class="right">

                <?php if ($title): ?>
                    <h3><?= $title ?></h3>
                <?php endif ?>
                
                <?= $text ?>

                <?php if ($link): ?>
                    <div class="btn-wrap">
                        <a href="<?= $link['url'] ?>" class="btn-border btn-border-black"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
                    </div>
                <?php endif ?>
                
                <?php if (is_array($details['items']) && checkArrayForValues($details['items'])): ?>
                <div class="item">

                    <?php if ($details['title']): ?>
                        <h3><?= $details['title'] ?></h3>
                    <?php endif ?>
                    
                    <ul class="contact-list">

                        <?php foreach ($details['items'] as $item): ?>

                            <?php if ($item['type'] == 'Link' && $item['link']): ?>
                                <li>
                                    <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

                                        <?php if ($item['icon']): ?>
                                            <?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
                                        <?php endif ?>

                                        <?= $item['link']['title'] ?>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if ($item['type'] == 'Text' && $item['text']): ?>
                                <li>

                                    <?php if ($item['icon']): ?>
                                        <?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
                                    <?php endif ?>

                                    <?= $item['text'] ?>

                                </li>
                            <?php endif ?>
                            
                        <?php endforeach ?>

                    </ul>
                </div>
            <?php endif ?>

        </div>
    </div>
</section>

<?php endif; ?>