<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nichirica
 */
$current_page_id = get_the_ID();
$current_page = get_post($current_page_id);
$current_page_slug = !empty($current_page->post_name) ? $current_page->post_name : ''

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header-main size">
  <div class="menu">
    <div class="logo">
      <a href="<?= get_home_url()?>">
        <img src="<?= THEME_URI ?>/assets/images/logo.svg" alt="logo">
      </a>
    </div>
    <div class="list-menu-wrap">
      <?php
      wp_nav_menu([
        'theme_location' => 'menu-1',
        'menu_id' => 'primary-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s list-menu">%3$s</ul>',
      ])
      ?>
      <ul class="list-locale">
        <li class="item-locale"><a href="/<?=$current_page_slug?>">JA</a></li>
        <li class="item-locale">/</li>
        <li class="item-locale"><a href="/en/<?=$current_page_slug?>">EN</a></li>
      </ul>
    </div>

  </div>
  <div class="menu-mb">
    <div class="logo">
      <a href="<?= get_home_url()?>">
        <img src="<?= THEME_URI ?>/assets/images/logo.svg" alt="logo">
      </a>
    </div>
    <div class="iconMenu twoLineMenuMB">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>
  <div class="menu-mb-detail">

    <?php
    wp_nav_menu([
      'theme_location' => 'menu-1',
      'menu_id' => 'primary-menu',
      'items_wrap' => '<ul id="%1$s" class="%2$s list-menu">%3$s</ul>',
    ])
    ?>
    <ul class="list-locale">
      <li class="item-locale"><a href="/<?=$current_page_slug?>">JA</a></li>
      <li class="item-locale">/</li>
      <li class="item-locale"><a href="/en/<?=$current_page_slug?>">EN</a></li>
    </ul>
  </div>
</header>
