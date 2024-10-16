</main>

<footer>
  <div class="top">
    <div class="content-width">

      <?php if ($field = get_field('form_pf', 'option')): ?>
        <?= do_shortcode('[contact-form-7 id="' . $field . '" html_class="form-wrap"]') ?>
      <?php endif ?>

      <?php if (($items = get_field('items_pf', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
      <div class="text">

        <?php foreach ($items as $item): ?>
          <?php if ($item['title'] || $item['link']): ?>
            <div class="item">

              <?php if ($item['title']): ?>
                <h3><?= $item['title'] ?></h3>
              <?php endif ?>
              
              <?php if ($item['link']): ?>
                <div class="btn-wrap">
                  <a href="<?= $item['link']['url'] ?>" class="btn-border btn-border-black"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                </div>
              <?php endif ?>

            </div>
          <?php endif ?>
        <?php endforeach ?>

      </div>
    <?php endif ?>

  </div>
</div>

<div class="bottom">
  <div class="content-width">
    <div class="logo-wrap">

      <?php if ($field = get_field('logo_f', 'option')): ?>
        <div class="logo">
          <a href="<?= get_home_url() ?>">
            <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
              <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>
          </a>
        </div>
      <?php endif ?>
      
      <?php if ($field = get_field('title_f', 'option')): ?>
        <h3 class="logo-title"><?= $field ?></h3>
      <?php endif ?>

      <?php the_field('text_f', 'option') ?>
      
      <?php if (($items = get_field('socials_f', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
      <ul class="soc">

        <?php foreach ($items as $item): ?>
          <?php if ($item['link']): ?>
            <li>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="<?= $item['link']['title'] ?>"></i></a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
        
      </ul>
    <?php endif ?>

  </div>

  <nav class="footer-menu">

    <?php if ($locations = get_nav_menu_locations()): ?>

      <?php foreach ($locations as $index => $menu): ?>

        <?php if (str_contains($index, 'footer') && has_nav_menu($index)): ?>
        <div class="item-menu">
          <h3><?= wp_get_nav_menu_name($index) ?></h3>

          <?php wp_nav_menu( array(
            'theme_location'  => $index,
            'container'       => '',
            'items_wrap'      => '<ul>%3$s</ul>'
          ) ); ?>

        </div>
      <?php endif ?>

    <?php endforeach ?>

  <?php endif ?>

  <div class="full-item">
    <ul>

      <?php if (($items = get_field('links_f', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
      <?php foreach ($items as $item): ?>
        <?php if ($item['link']): ?>
          <li>
            <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
          </li>
        <?php endif ?>
      <?php endforeach ?>
    <?php endif ?>

    <?php if ($field = get_field('copyright_f', 'option')): ?>
      <li><?= $field ?></li>
    <?php endif ?>

  </ul>
</div>
</nav>
</div>
</div>
</footer>

<div id="default-popup " style="display:none;">
  <div class="popup-main">
  </div>
</div>

<?php wp_footer() ?>
</body>
</html>