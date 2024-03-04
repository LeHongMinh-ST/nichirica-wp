<?php
/*
Template Name: Product Label
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
      お問い合わせページより、お問い合わせください。
    </div>
  </div>


<?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
