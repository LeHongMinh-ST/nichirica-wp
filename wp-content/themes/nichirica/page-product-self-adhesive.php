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
              各金融・証券会社、生損保会社、官公庁等からの各種通知はがきや新製品・展示会等の案内状、ダイレクトメール、医療費明細書など。
            </div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>	印刷適正に優れた圧着はがき用紙で、剥がした後は再接着出来ません。</li>
                <li>
                  封書送りの情報をはがきの料金で、郵便料金のコストダウンができます。              </li>
                <li>
                  汎用小型レーザープリンタで印字ができ、圧着することでデータの秘密を              </li>
                <li>
                  保持することができます。              </li>
                <li>
                  汎用シーラーで使用可能です              </li>
              </ul>

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
