<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

    <?php if($solutions): ?>

        <?php foreach($solutions as $post): 

            global $post;
            setup_postdata($post); ?>

            <?php $is_examples = ($items = get_field('examples')) && is_array($items) && checkArrayForValues($items) ?>

            <section class="graph-block-2x">
                <div class="content-width">

                    <?php if ($args['index'] == 0 && !is_front_page()): ?>
                        <?php get_template_part('parts/breadcrumbs') ?>
                    <?php endif ?>

                    <div class="content">
                        <div class="text">
                            <h2><?php the_title() ?></h2>

                            <?php if (has_post_thumbnail()): ?>
                                <figure class="mob">
                                    <?php the_post_thumbnail('full') ?>
                                </figure>
                            <?php endif ?>
                            
                            <?php if (has_excerpt()): ?>
                                <?php the_excerpt() ?>
                            <?php endif ?>

                            <?php the_content() ?>

                            <?php if (!$is_examples): ?>
                                <div class="btn-wrap-left">
                                    <a href="<?php the_permalink() ?>" class="btn-border"><?php _e('Explore pricing', 'Genex') ?></a>
                                </div>
                            <?php endif ?>

                        </div>

                        <?php if (has_post_thumbnail()): ?>
                            <figure>
                                <?php the_post_thumbnail('full') ?>
                            </figure>
                        <?php endif ?>

                        <?php if ($is_examples): ?>
                            <div class="item-wrap">
                                <div class="title">
                                    <h3><?php _e('Examples of use', 'Genex') ?></h3>
                                </div>

                                <?php foreach ($items as $item): ?>
                                    <div class="item">

                                        <?php if ($item['image']): ?>
                                            <div class="img-wrap">
                                                <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
                                            </div>
                                        <?php endif ?>

                                        <div class="text-wrap">

                                            <?php if ($item['title']): ?>
                                                <h5><?= $item['title'] ?></h5>
                                            <?php endif ?>

                                            <?= $item['text'] ?>

                                        </div>
                                    </div>
                                <?php endforeach ?>
                                
                                <div class="btn-wrap">
                                    <a href="<?php the_permalink() ?>" class="btn-border"><?php _e('Explore pricing', 'Genex') ?></a>
                                </div>
                            </div>
                        <?php endif ?>

                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php endif; ?>