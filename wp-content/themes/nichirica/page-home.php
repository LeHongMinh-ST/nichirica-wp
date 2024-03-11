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
        <div class="swiper-slide">
          <div><img src="<?= THEME_URI ?>/assets/images/banner5.png" alt="banner5"></div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="content-slide">

        <div class="content-main">
          <div class="swiper" id="bannerContentSlide">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide swiper-content-slide none">
                <!--                <div class="sildeTitle">-->
                <!--                  NichiRicaのテープは自然環境に配慮したサステナブルな製品です。-->
                <!--                  <div class="line">-->
                <!--                    <div class="main-line"></div>-->
                <!--                  </div>-->
                <!--                </div>-->
                <!--                <img class="mb" src="-->
                <?php //= THEME_URI ?><!--/assets/images/chevron-right.svg" alt="">-->

              </div>
              <div class="swiper-slide swiper-content-slide">
                <div class="sildeTitle">
                  <a
                    href="<?= get_permalink(get_page_by_path('about-tape')) ?>">NichiRicaのテープは自然環境に配慮したサステナブルな製品です。</a>
                  <div class="line">
                    <div class="main-line"></div>
                  </div>
                </div>
                <img class="" src="<?= THEME_URI ?>/assets/images/chevron-right.svg" alt="">


              </div>
              <div class="swiper-slide swiper-content-slide">
                <div class="sildeTitle">
                  <a href="<?= get_permalink(get_page_by_path('services')) ?>">技術開発情報はこちら</a>
                  <div class="line">
                    <div class="main-line"></div>
                  </div>
                </div>
                <img class="" src="<?= THEME_URI ?>/assets/images/chevron-right.svg" alt="">

              </div>
              <div class="swiper-slide swiper-content-slide">
                <div class="sildeTitle">
                  <a href="<?= get_permalink(get_page_by_path('product')) ?>">製品情報はこちら</a>
                  <div class="line">
                    <div class="main-line"></div>
                  </div>
                </div>
                <img class="" src="<?= THEME_URI ?>/assets/images/chevron-right.svg" alt="">


              </div>
              <div class="swiper-slide swiper-content-slide">
                <div class="sildeTitle">
                  <a href="<?= get_permalink(get_page_by_path('about-nichirica')) ?>">NichiRicaってどんな会社？</a>
                  <div class="line">
                    <div class="main-line"></div>
                  </div>
                </div>
                <img class="" src="<?= THEME_URI ?>/assets/images/chevron-right.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination">
        </div>
      </div>

    </div>
  </div>
  <div class="posts size">
    <div class="itemPost">

      <div class="thumbnailPost">
        <img src="<?= THEME_URI ?>/assets/images/top/post1.png" alt="">

      </div>
      <div class="contentPost">
        <h3 class="titlePost">
          NichiRicaのテープは自然環境に配慮したサステナブルな製品です。
        </h3>
        <div class="line">
          <div class="main-line"></div>
        </div>
        <div class="buttonPostWrap">
          <a href="<?= get_permalink(get_page_by_path('about-tape')) ?>">
            <div class="buttonPost">詳しく見る</div>
          </a>
        </div>
      </div>
    </div>
    <div class="itemPost">

      <div class="thumbnailPost">
        <img src="<?= THEME_URI ?>/assets/images/top/post2.png" alt="">

      </div>
      <div class="contentPost">
        <h3 class="titlePost">
          NichiRicaってどんな会社？
        </h3>
        <div class="line">
          <div class="main-line"></div>
        </div>
        <div class="buttonPostWrap">
          <a href="<?= get_permalink(get_page_by_path('about-nichirica')) ?>">
            <div class="buttonPost">詳しく見る</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="categories size">
    <div class="categories--title">
      製品情報
    </div>

    <div class="line">
      <div class="main-line"></div>
    </div>
    <div class="categories--content">
      <div class="categories--item">
        <a href="<?= get_permalink(get_page_by_path('product/tape')) ?>">
          <div class="circle">
            <img src="<?= THEME_URI ?>/assets/images/top/cate1.png" alt="cate-icon-1">
          </div>
          <div class="text-wrapper">テープ製品</div>
        </a>

      </div>
      <div class="categories--item">
        <a href="<?= get_permalink(get_page_by_path('product/paper')) ?>">
          <div class="circle">
            <img src="<?= THEME_URI ?>/assets/images/top/cate2.png" alt="cate-icon-2">
          </div>
          <div class="text-wrapper">用紙</div>
        </a>
      </div>
      <div class="categories--item">
        <a href="<?= get_permalink(get_page_by_path('product/label')) ?>">
          <div class="circle">
            <img src="<?= THEME_URI ?>/assets/images/top/cate3.png" alt="cate-icon-3">
          </div>
          <div class="text-wrapper">ラベル</div>
        </a>
      </div>
      <div class="categories--item">
        <a href="<?= get_permalink(get_page_by_path('product/self-adhesive')) ?>">
          <div class="circle">
            <img src="<?= THEME_URI ?>/assets/images/top/cate6.png" alt="cate-icon-6">
          </div>
          <div class="text-wrapper">自着機能資材</div>
        </a>
      </div>
      <div class="categories--item">
        <a href="<?= get_permalink(get_page_by_path('product/machine')) ?>">
          <div class="circle">
            <img src="<?= THEME_URI ?>/assets/images/top/cate4.png" alt="cate-icon-4">
          </div>
          <div class="text-wrapper">専用機械</div>
        </a>
      </div>
      <div class="categories--item">
        <a href="<?= get_permalink(get_page_by_path('product/contract-coating')) ?>">
          <div class="circle">
            <img src="<?= THEME_URI ?>/assets/images/top/cate5.png" alt="cate-icon-5">
          </div>
          <div class="text-wrapper">受託塗工</div>
        </a>
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
      <a href="<?= get_permalink(get_page_by_path('pre-release')) ?>" class="nichi-btn">
        一覧を見る
      </a>
    </div>
  </div>

<?php
get_footer();
