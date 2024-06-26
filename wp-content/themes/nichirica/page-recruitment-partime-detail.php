<?php
/*
Template Name: Recruitment Detail Partime
*/

get_header();
?>

<?php get_template_part('template-parts/header/header-recruitment') ?>

<?php get_template_part('template-parts/banners/banner5')?>

  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url()?>">Top</a>
        </li>        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment')) ?>">採用情報</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="recruitment_detail size">
    <div class="section-content recruitment_detail__content">
      <?php
      the_content(
        sprintf(
          wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nichirica' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post( get_the_title() )
        )
      );
      ?>

    </div>
  </div>
  <div class="banner banner-footer" style="background-image: url(<?= THEME_URI ?>/assets/images/header7.png);">
    <div class="section-header">
      <div class="section-header--title">社員インタビュー</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>

      <div class="section-header--btn">
        <a href="<?= get_permalink(get_page_by_path('recruitment/benefits')) ?>" class="nichi-btn">詳しく見る</a>
      </div>
    </div>
  </div>

  <div class="recruitment_footer parttime">
    <div class="faq item">
      <a href="<?= get_permalink(get_page_by_path('recruitment/faq')) ?>">
        <div class="circle">
          <img src="<?= THEME_URI ?>/assets/images/faq-icon.png" alt="welfare">
        </div>
        <div class="text-wrapper">FAQ</div>
      </a>
    </div>
  </div>

  <div class="recruitment_button">
    <a href="<?= get_permalink(get_page_by_path('recruitment/entry')) ?>" class="nichi-btn-bg">
      エントリー
    </a>
  </div>
  <div class="recruitment-read">
    <?= get_template_part('template-parts/recruitment-list')?>
  </div>
<?php
get_footer();
