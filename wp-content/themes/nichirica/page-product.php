<?php
/*
Template Name: Product
*/

get_header();
?>


<?php get_template_part('template-parts/banners/banner6') ?>

  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="products size" id="product-tape">
    <div class="section-header">
      <div class="section-header--title">テープ製品</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products--list">
      <div class="products--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr1.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/tape')) ?>" class="">
            <span class="text">水付けガムテープ </span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
      <div class="products--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr2.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/tape')) ?>#double-sided" class="">
            <span class="text">両面粘着テープ関連製品</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="products size" id="product-paper">
    <div class="section-header">
      <div class="section-header--title">印刷用紙</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products--list">
      <div class="products--item full">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr3.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/paper')) ?>" class="">
            <span class="text">圧着はがき用紙関連製品</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="products size" id="product-label">
    <div class="section-header">
      <div class="section-header--title">ラベル</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products--list">
      <div class="products--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr4.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/label')) ?>" class="">
            <span class="text">ラベル</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="products size" id="product-self-adhesive">
    <div class="section-header">
      <div class="section-header--title">自着機能資材</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products--list">
      <div class="products--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr5.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/self-adhesive')) ?>" class="">
            <span class="text">自着機能資材</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="products size" id="product-machine">
    <div class="section-header">
      <div class="section-header--title">専用機械</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products--list">
      <div class="products--item sm">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr6.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/machine')) ?>#double-sided" class="">
            <span class="text">両面粘着テープ自動貼付機</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
      <div class="products--item sm">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr7.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/machine')) ?>#sealing" class="">
            <span class="text">自動封かん機</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
      <div class="products--item sm">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr8.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/machine')) ?>#duct-tape-dispenser" class="">
            <span class="text">ガムテープディスペンサー</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="products size last" id="product-contract-coating">
    <div class="section-header">
      <div class="section-header--title">受託塗工</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products--list">
      <div class="products--item full">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/pr9.png" alt="products">
        </div>
        <div class="item-button">
          <a href="<?= get_permalink(get_page_by_path('product/contract-coating')) ?>" class="">
            <span class="text">受託塗工</span>
            <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
