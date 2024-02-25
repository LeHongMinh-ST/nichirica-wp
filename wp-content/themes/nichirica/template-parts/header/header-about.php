<div class="header-sub">
  <div class="size">
    <?php
    wp_nav_menu([
      'theme_location' => 'menu-2',
      'menu_id' => 'sub-menu',
      'items_wrap' => '<ul id="%1$s" class="%2$s list-menu">%3$s</ul>',
    ])
    ?>
  </div>
</div>
