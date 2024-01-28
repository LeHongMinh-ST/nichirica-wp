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
  <div class="logo">
    <a href="index.html">
      <img src="<?= THEME_URI ?>/assets/images/logo.svg" alt="logo">
    </a>
  </div>
  <ul class="list-menu">
    <li class="item-menu"><a href="about.html">企業情報</a></li>
    <li class="item-menu"><a href="products.html">製品情報</a></li>
    <li class="item-menu"><a href="service.html">技術開発情報</a></li>
    <li class="item-menu"><a href="recruitment.html">採用情報</a></li>
    <li class="item-menu"><a href="inquiry.html">環境</a></li>
    <li class="item-menu"><a href="entry.html">お問い合わせ</a></li>
    <li class="item-menu"><a href="">JA / EN</a></li>
  </ul>
</header>
