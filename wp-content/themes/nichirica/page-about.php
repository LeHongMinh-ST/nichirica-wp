<?php
/*
Template Name: About
*/

get_header();
?>

  <?php get_template_part('template-parts/banners/banner1')?>
  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url()?>">Top</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="about size">
    <div class="section-content about--list">
      <div class="about--item">
        <a href="<?= get_permalink( get_page_by_path( 'about/message' ) )?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about1.png)">
            <div class="text-wrapper">社長挨拶</div>
          </div>
        </a>
      </div>
      <div class="about--item">
        <a href="<?= get_permalink(get_page_by_path('about/profile')) ?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about2.png)">
            <div class="text-wrapper">会社概要・会社沿革・組織図</div>
          </div>
        </a>
      </div>
      <div class="about--item">
        <a href="<?= get_permalink(get_page_by_path('about/offices')) ?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about3.png)">
            <div class="text-wrapper">事業所・グループ企業</div>
          </div>
        </a>
      </div>
      <div class="about--item">
        <a href="<?= get_permalink(get_page_by_path('about/environmental-policy')) ?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about4.png)">
            <div class="text-wrapper">環境方針</div>
          </div>
        </a>
      </div>
    </div>
  </div>

<?php
get_footer();
