<?php
/*
Template Name: Product Rika
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
  <div class="products_detail size rika-mail">
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            リカメール
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/rika-mail1.png " alt="product">
            <img src="<?= THEME_URI ?>/assets/images/rika-mail2.png " alt="product">
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
              各金融・証券会社、生損保会社、官公庁等からの各種通知はがきや新製品・展示会等の案内状、ダイレクトメール、医療費明細書など。
            </div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>
                  特寸・少量・短納期に対応可能
                </li>
                <li>
                  印刷適性に優れた圧着はがき用紙で、剥がした後の再接着は不可能
                </li>
                <li>
                  封書送りの情報をはがきの料金で、郵便料金のコストダウン可能
                </li>
                <li>汎用小型レーザープリンタで印字ができ、圧着することでデータの秘密を保持</li>
                <li>汎用シーラで使用可能</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
