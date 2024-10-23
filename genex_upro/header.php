<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line">
      <div class="content-width">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
            </a>
          </div>
        <?php endif ?>
        
        <nav class="menu-wrap">

          <?php $menu = wp_get_nav_menu_items(2) ?>

          <?php if ($menu): ?>

            <?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>

            <ul class="top-menu">

              <?php foreach ($menu as $item): ?>

                <?php $child_menu = []; ?>
                <?php foreach ($menu as $item_2): ?>
                  <?php if ($item_2->menu_item_parent == $item->ID) $child_menu[] = $item_2; ?>
                <?php endforeach ?>

                <?php if ($item->menu_item_parent === '0'): ?>
                  <li<?php if($actual_link == $item->url) echo ' class="current-menu-item"' ?>>
                    <a href="<?= $item->url ?>"<?php if($item->target) echo ' target="_blank"' ?> data-item="<?= $item->title ?>"><span><?= $item->title ?></span>

                      <?php if ($child_menu): ?>
                        <i class="fa-regular fa-chevron-down"></i>
                      <?php endif ?>

                    </a>

                    <?php if ($child_menu): ?>
                      <ul class="sub-menu">

                        <?php foreach ($child_menu as $item_2): ?>
                          <li<?php if($actual_link == $item_2->url) echo ' class="current-menu-item"' ?>>
                            <a href="<?= $item_2->url ?>"<?php if($item_2->target) echo ' target="_blank"' ?>><?= $item_2->title ?></a>
                          </li>
                        <?php endforeach ?>

                      </ul>
                    <?php endif ?>

                  </li>
                <?php endif ?>

              <?php endforeach ?>

            </ul>
          <?php endif ?>

          <div class="btn-wrap">

            <?php if ($field = get_field('link_1_h', 'option')): ?>
              <div class="login">
                <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>>
                  <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1.svg" alt="">
                  <?= $field['title'] ?>
                </a>
              </div>
            <?php endif ?>

            <div class="btn-right">
              
              <?php if ($field = get_field('link_2_h', 'option')): ?>
                <div class="reg">
                  <a href="<?= $field['url'] ?>" class="btn-head"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                </div>
              <?php endif ?>

              <div class="open-menu">
                <a href="#">
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
      <div class="close-menu">
        <a href="#"><i class="fal fa-times"></i></a>
      </div>
    </div>
    <div class="wrap">

      <?php if ($field = get_field('logo_h', 'option')): ?>
        <div class="logo-wrap">
          <a href="<?= get_home_url() ?>">
            <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
              <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>
          </a>
        </div>
      <?php endif ?>

      <?php $menu = wp_get_nav_menu_items(2) ?>

      <?php if ($menu): ?>
        <nav class="mob-menu-wrap">
          <ul class="mob-menu">

            <?php foreach ($menu as $item): ?>

              <?php $child_menu = []; ?>
              <?php foreach ($menu as $item_2): ?>
                <?php if ($item_2->menu_item_parent == $item->ID) $child_menu[] = $item_2; ?>
              <?php endforeach ?>

              <?php if ($item->menu_item_parent === '0'): ?>
                <li<?php if($child_menu) echo ' class="sub-item"' ?>>
                  <a href="<?= $item->url ?>"<?php if($item->target) echo ' target="_blank"' ?>><?= $item->title ?></a>

                  <?php if ($child_menu): ?>
                    <ul class="sub-menu">

                      <?php foreach ($child_menu as $item_2): ?>
                        <li>
                          <a href="<?= $item_2->url ?>"<?php if($item_2->target) echo ' target="_blank"' ?>><?= $item_2->title ?></a>
                        </li>
                      <?php endforeach ?>

                    </ul>
                  <?php endif ?>

                </li>
              <?php endif ?>

            <?php endforeach ?>

          </ul>
        </nav>
      <?php endif ?>

    </div>
  </div>

  <main>