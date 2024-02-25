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
      当社は各種塗料の自社内調合を可能とするため、複数の重合釜、混合釜、分散機を保有しています。<br><br>
      これら保有設備により、当社主要製品の『ガムテープ糊』、『自着糊』、『圧着はがき糊』、『各種粘着剤』の社内調合を実現しています。<br><br>
      更に顧客様の『こんな糊を作りたい。』のご要望に対して、設計、テスト調合、性能確認まで様々なご協力にお応えします。<br><br>
      お問い合わせページより、お問い合わせください
    </div>
  </div>


<?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
