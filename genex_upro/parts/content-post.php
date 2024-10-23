<?php $post_status = get_post_status() ?>

<div class="item">

    <?php if (has_post_thumbnail()): ?>
        <figure>
            <a href="<?= $post_status == 'future' ? '#event' : get_the_permalink() ?>"<?php if($post_status == 'future') echo ' class="fancybox"' ?>>
                <?php the_post_thumbnail('full') ?>
            </a>
        </figure>
    <?php endif ?>

    <div class="text">
        <div class="top">

            <?php $terms = wp_get_object_terms(get_the_ID(), 'category') ?>

            <?php if (is_array($terms) && !empty($terms)): ?>
            <div class="label">

                <?php foreach ($terms as $term): ?>
                    <p><?= $term->name ?></p>
                <?php endforeach ?>

            </div>
        <?php endif ?>

        <ul>
            <li><?= get_the_date() ?></li>
        </ul>
    </div>
    <h3<?php if($post_status == 'future') echo ' class="get_webinar_title"' ?>><a href="<?= $post_status == 'future' ? '#event' : get_the_permalink() ?>"<?php if($post_status == 'future') echo ' class="fancybox"' ?>><?php the_title() ?></a></h3>

    <?php if ($post_status == 'future'): ?>
        <div class="link">
            <a href="#event" class="fancybox get_webinar_button"><?php _e('Enroll now', 'Genex') ?></a>
        </div>
    <?php else: ?>
        <div class="link">
            <a href="<?php the_permalink() ?>"><?php _e('Read more', 'Genex') ?></a>
        </div>
    <?php endif ?>

</div>
</div>