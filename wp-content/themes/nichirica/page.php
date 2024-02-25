<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nichirica
 */

get_header();
?>

<?php
get_template_part('template-parts/banners/banner-no-image');
?>
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
<?php
get_footer();
