<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nichirica
 */

?>

<div class="footer">
  <div class="main-footer size">
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('about')) ?>">企業情報</a>
      </div>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('product')) ?>">製品情報</a>
      </div>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('services')) ?>">技術開発情報</a>
      </div>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('recruitment')) ?>">採用情報</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment-new-graduates')) ?>">
            新卒
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment-mid-term')) ?>">
            中途
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment-mid-term')) ?>">
            パート
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href=""> 環境</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="">
            子リンク
          </a>
        </li>
        <li>
          <a href="">
            子リンク
          </a>
        </li>
        <li>
          <a href="">
            子リンク
          </a>
        </li>
        <li>
          <a href="">
            子リンク
          </a>
        </li>
        <li>
          <a href="">
            子リンク
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink( get_option( 'page_for_posts' ) );?>">ニュース</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="/inquiry">
            お問い合わせ
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="copyright size">
  <div class="text-wrapper">Copyright(C)2022 株式会社NichiRica All Rights Reserved.</div>
  <div class="stamp">
    <img src="<?= THEME_URI ?>/assets/images/tem1.png" alt="stamp">
    <img src="<?= THEME_URI ?>/assets/images/tem2.png" alt="stamp">
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
