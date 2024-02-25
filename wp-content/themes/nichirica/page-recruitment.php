<?php
/*
Template Name: Recruitment
*/

get_header();
?>

<?php get_template_part('template-parts/banners/banner3')?>

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
<?= get_template_part('template-parts/recruitment-list')?>

<?php
get_footer();
