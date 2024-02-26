<?php
/*
Template Name: Product Self Adhesive
*/

get_header();
?>


<?php get_template_part('template-parts/banners/banner-no-image')?>

  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url()?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product')) ?>">製品情報</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="products_detail size self-adhesive ">
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            リカメール
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/self-adhesive1.png " alt="product">
          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">リカメール</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">
              <ul>
                <li>合成樹脂チューブやケーブルなどの結束用、</li>
                <li>電子部品生産工程内での搬送用、マスキング用。</li>

              </ul>
            </div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              接着剤塗工面どうしを重ねて加圧すると、その部分だけが接着し、<br>
              それ以外の部分はどんな生活物質（粘着性物質を除く）にも接着しない。
            </div>
          </div>
          <div class="item item-image">
            <div class="label">使用例:</div>
            <div class="message">
              <div class="message-image">
                <div class="message-image-item">
                  <img src="<?= THEME_URI ?>/assets/images/self-adhesive2.png " alt="product">
                  <div class="des">医療用チューブの結束</div>
                </div>
                <div class="message-image-item">
                  <img src="<?= THEME_URI ?>/assets/images/self-adhesive3.png " alt="product">
                  <div class="des">医療用チューブの結束</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
