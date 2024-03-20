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

<div class="footer footer-pc">
  <div class="main-footer size">
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('about')) ?>">企業情報</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="<?= get_permalink(get_page_by_path('about/message')) ?>">
            社長挨拶
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about/profile')) ?>">
            会社概要・会社沿革・組織図
          </a>
        </li>

        <li>
          <a href="<?= get_permalink(get_page_by_path('about/offices')) ?>">
            事業所・グループ企業
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about/environmental-policy')) ?>">
            環境方針
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('product')) ?>">製品情報</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/tape')) ?>">
            テープ製品
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/paper')) ?>">
            印刷用紙
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/label')) ?>">
            ラベル
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/self-adhesive')) ?>">
            自着機能資材
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/machine')) ?>">
            専用機械
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/contract-coating')) ?>">
            受託塗工
          </a>
        </li>
      </ul>
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
          <a href="<?= get_permalink(get_page_by_path('recruitment/new-graduates')) ?>">
            募集要項（新卒)
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/mid-term')) ?>">
            募集要項（中途）
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/mid-term')) ?>">
            募集要項（パート）
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/benefits')) ?>">
            福利厚生・社員インタビュー
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/faq')) ?>">
            FAQ
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list">
<!--      <div class="title-list">-->
<!--        <a href="--><?php //= get_permalink( get_option( 'page_for_posts' ) );?><!--">ニュース</a>-->
<!--      </div>-->
      <div class="title-list">
        <a href="<?=get_permalink(get_page_by_path('inquiry'))?>">お問い合わせ</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="<?= get_permalink(get_page_by_path('privacy-policy')) ?>">
            プライバシーポリシー
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('pre-release')) ?>">
            プレスリリース
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about-nichirica')) ?>">
            NichiRicaってどんな会社？
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about-tape')) ?>">
            NichiRicaの製品について
          </a>
        </li>
      </ul>

    </div>
  </div>
</div>
<div class="footer footer-sp">
  <div class="main-footer size">
    <div class="item-list">
      <div class="title-list">
        <a  data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false" aria-controls="collapseAbout">企業情報</a>
      </div>
      <ul class="list-menu collapse"  id="collapseAbout">
        <li>
          <a href="<?= get_permalink(get_page_by_path('about')) ?>">企業情報</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about/message')) ?>">
            社長挨拶
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about/profile')) ?>">
            会社概要・会社沿革・組織図
          </a>
        </li>

        <li>
          <a href="<?= get_permalink(get_page_by_path('about/offices')) ?>">
            事業所・グループ企業
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about/environmental-policy')) ?>">
            環境方針
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list ">
      <div class="title-list">
        <a data-bs-toggle="collapse" href="#collapseProduct" role="button" aria-expanded="false" aria-controls="collapseProduct">製品情報</a>
      </div>
      <ul class="list-menu collapse"  id="collapseProduct">
        <li>
          <a href="<?= get_permalink(get_page_by_path('product')) ?>">製品情報</a>

        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/tape')) ?>">
            テープ製品
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/paper')) ?>">
            印刷用紙
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/label')) ?>">
            ラベル
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/self-adhesive')) ?>">
            自着機能資材
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/machine')) ?>">
            専用機械
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product/contract-coating')) ?>">
            受託塗工
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a href="<?= get_permalink(get_page_by_path('services')) ?>">技術開発情報</a>
      </div>
    </div>
    <div class="item-list">
      <div class="title-list">
        <a data-bs-toggle="collapse" href="#collapseRecruitment" role="button" aria-expanded="false" aria-controls="collapseRecruitment">採用情報</a>
      </div>
      <ul class="list-menu collapse"  id="collapseRecruitment">
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment')) ?>">採用情報</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/new-graduates')) ?>">
            募集要項（新卒)
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/mid-term')) ?>">
            募集要項（中途）
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/mid-term')) ?>">
            募集要項（パート）
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/benefits')) ?>">
            福利厚生・社員インタビュー
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/faq')) ?>">
            FAQ
          </a>
        </li>
      </ul>
    </div>
    <div class="item-list">
      <!--      <div class="title-list">-->
      <!--        <a href="--><?php //= get_permalink( get_option( 'page_for_posts' ) );?><!--">ニュース</a>-->
      <!--      </div>-->
      <div class="title-list">
        <a href="<?=get_permalink(get_page_by_path('inquiry'))?>">お問い合わせ</a>
      </div>
      <ul class="list-menu">
        <li>
          <a href="<?= get_permalink(get_page_by_path('privacy-policy')) ?>">
            プライバシーポリシー
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('pre-release')) ?>">
            プレスリリース
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about-nichirica')) ?>">
            NichiRicaってどんな会社？
          </a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about-tape')) ?>">
            NichiRicaの製品について
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
