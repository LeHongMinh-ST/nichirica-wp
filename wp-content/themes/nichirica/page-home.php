<?php
/*
Template Name: Home
*/

get_header();
?>

  <div class="main-banner">
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
        <div class="swiper-slide">
          <div><img src="<?= THEME_URI ?>/assets/images/banner4.png" alt="banner4"></div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
  <div class="categories">
    <div class="categories--content">
      <div class="categories--item">
        <div class="circle">
          <img src="<?= THEME_URI ?>/assets/images/cate-icon1.png" alt="cate-icon-1">
        </div>
        <div class="text-wrapper">テープ製品</div>
      </div>
      <div class="categories--item">
        <div class="circle">
          <img src="<?= THEME_URI ?>/assets/images/cate-icon2.png" alt="cate-icon-2">
        </div>
        <div class="text-wrapper">用紙</div>
      </div>
      <div class="categories--item">
        <div class="circle">
          <img src="<?= THEME_URI ?>/assets/images/cate-icon3.png" alt="cate-icon-3">
        </div>
        <div class="text-wrapper">ラベル</div>
      </div>
      <div class="categories--item">
        <div class="circle">
          <img src="<?= THEME_URI ?>/assets/images/cate-icon4.png" alt="cate-icon-4">
        </div>
        <div class="text-wrapper">専用機械</div>
      </div>
      <div class="categories--item">
        <div class="circle">
          <img src="<?= THEME_URI ?>/assets/images/cate-icon5.png" alt="cate-icon-5">
        </div>
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
        <div class="text-wrapper">
          <div class="icon">
            <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
          </div>
          <a href="">投資家向けサイトにて当社が紹介されました</a>
        </div>
      </div>
      <div class="press-release--item">
        <div class="date">2023.12.06</div>

        <div class="text-wrapper">
          <div class="icon">
            <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
          </div>
          <a href="">投資家向けサイトにて当社が紹介されました</a>
        </div>
      </div>
      <div class="press-release--item">
        <div class="date">2023.12.06</div>

        <div class="text-wrapper">
          <div class="icon">
            <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
          </div>
          <a href="" class="active">投資家向けサイトにて当社が紹介されました</a>
        </div>
      </div>
    </div>
    <div class="section-footer text-center">
      <a href="<?= get_permalink(get_page_by_path('docs')) ?>" class="nichi-btn">
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
    <?php
    $current_page_id = get_the_ID();
    $current_page = get_post($current_page_id);
    $current_page_slug = $current_page->post_name;
    ?>
    <div class="section-content recruitment--list">
      <?php if ($current_page_slug != 'recruitment/new-graduates') { ?>
        <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq1.png)">
          <a href="<?= get_permalink(get_page_by_path('recruitment/new-graduates')) ?>">
            新卒
          </a>
        </div>
      <?php } ?>
      <?php if ($current_page_slug != 'recruitment/mid-term') { ?>

        <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq2.png)">
          <a href="<?= get_permalink(get_page_by_path('recruitment/mid-term')) ?>">
            中途
          </a>
        </div>
      <?php } ?>
      <?php if ($current_page_slug != 'recruitment/part-time') { ?>

        <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq3.png)">
          <a href="<?= get_permalink(get_page_by_path('recruitment/part-time')) ?>">
            パート
          </a>
        </div>
      <?php } ?>
    </div>
  </div>

<?php
get_footer();
