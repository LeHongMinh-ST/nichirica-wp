<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nichirica
 */

get_header();
?>

  <div class="main-banner size">
    <!-- Slider main container -->
    <div class="swiper" id="bannerSlide">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div><img src="<?= THEME_URI ?>/assets/images/banner1.png" alt="banner1"></div>
        </div>
        <div class="swiper-slide">
          <div><img src="<?= THEME_URI ?>/assets/images/banner2.png" alt="banner2"></div>
        </div>
        <div class="swiper-slide">
          <div><img src="<?= THEME_URI ?>/assets/images/banner3.png" alt="banner3"></div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
  <div class="categories size">
    <div class="categories--content">
      <div class="categories--item">
        <div class="circle"></div>
        <div class="text-wrapper">テープ製品</div>
      </div>
      <div class="categories--item">
        <div class="circle"></div>
        <div class="text-wrapper">用紙</div>
      </div>
      <div class="categories--item">
        <div class="circle"></div>
        <div class="text-wrapper">ラベル</div>
      </div>
      <div class="categories--item">
        <div class="circle"></div>
        <div class="text-wrapper">専用機械</div>
      </div>
      <div class="categories--item">
        <div class="circle"></div>
        <div class="text-wrapper">受託塗工</div>
      </div>
    </div>
  </div>
  <div class="press-release size">
    <div class="section-header">
      <div class="section-header--title">プレスリリース</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content press-release--list">
      <div class="press-release--item">
        <div class="date">2023.12.06</div>
        <div class="text-wrapper"><a href="">テキストが入ります。</a></div>
      </div>
      <div class="press-release--item">
        <div class="date">2023.12.06</div>
        <div class="text-wrapper"><a href="">テキストが入ります。</a></div>
      </div>
      <div class="press-release--item">
        <div class="date">2023.12.06</div>
        <div class="text-wrapper"><a href="" class="active">これはリンクです。</a></div>
      </div>
    </div>
    <div class="section-footer text-center">
      <a href="" class="nichi-btn">
        一覧を見る
      </a>
    </div>
  </div>
  <div class="recruitment size">
    <div class="section-header">
      <div class="section-header--title">採用情報</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content recruitment--list">
      <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq1.png)">
        <a href="recruitment_detail.html">
          新卒
        </a>
      </div>

      <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq2.png)">
        <a href="recruitment_detail.html">
          新卒
        </a>
      </div>

      <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq3.png)">
        <a href="recruitment_detail.html">
          パート
        </a>
      </div>
    </div>
  </div>

<?php
get_footer();
