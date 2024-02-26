<?php
$current_page_id = get_the_ID();
$current_page = get_post($current_page_id);
$current_page_slug = $current_page->post_name;
?>
<div class="recruitment recruitment-page size">
  <div class="section-content recruitment--list">
    <?php if ($current_page_slug != 'new-graduates') { ?>
      <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq1.png)">
        <a href="<?= get_permalink(get_page_by_path('recruitment/new-graduates')) ?>">
          新卒
        </a>
      </div>
    <?php } ?>
    <?php if ($current_page_slug != 'mid-term') { ?>

      <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq2.png)">
        <a href="<?= get_permalink(get_page_by_path('recruitment/mid-term')) ?>">
          中途
        </a>
      </div>
    <?php } ?>
    <?php if ($current_page_slug != 'part-time') { ?>

      <div class="recruitment--item" style="background-image: url(<?= THEME_URI ?>/assets/images/rq3.png)">
        <a href="<?= get_permalink(get_page_by_path('recruitment/part-time')) ?>">
          パート
        </a>
      </div>
    <?php } ?>

  </div>
</div>
