<?php
/*
Template Name: Thank You Entry
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
  <div class="thank-you size">
    <div class="section-content thank-you__content ">
      ご記入いただいた情報は無事に送信されました。<br>内容確認後、担当者よりご連絡させていただきます。<br><br>エントリーいただきありがとうございました。
    </div>
    <div class="section-footer">
      <div class="item-button">
        <a href="<?= get_home_url() ?>" class="">
          <span class="text">トップページへ戻る</span>
          <img class="arrow" src="<?= THEME_URI?>/assets/images/arrow-right.svg" alt="arrow">
        </a>
      </div>
    </div>
  </div>
<?php
get_footer();
