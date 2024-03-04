<?php
/*
Template Name: Product Contract Coating
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

  <div class="products_detail size contract-coating">

    <div class="section-content products_detail__content">
      原料投入からの塗料調合、コンセプト提案の塗料共同開発、水系非クリーンコーター～溶剤系クリーンコーターを用いた幅広い領域のコーティング、各種スリッター、加工機を用いたテープ化、ラベル化、シート化など様々なご要望にお答えします。お気軽にお問い合わせページより、お問い合わせください。
    </div>
  </div>


<?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
