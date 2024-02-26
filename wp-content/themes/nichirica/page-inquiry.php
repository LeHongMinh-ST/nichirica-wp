<?php
/*
Template Name: Form
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
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="inquiry size">
    <div class="section-content inquiry__content nichi-form">
      <?php
      the_content(
        sprintf(
          wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lancenter' ),
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

<?php
get_footer();
