<?php
$current_page_id = get_the_ID();
$current_page = get_post($current_page_id);
$current_page_slug = $current_page->post_name;
?>
<div class="read-together">
  <div class="read-together-header">合わせて読む</div>
  <div class="about size">
    <div class="section-content about--list">
      <?php if ($current_page_slug != 'message') { ?>
        <div class="about--item">
          <a href="<?= get_permalink(get_page_by_path('about/message')) ?>">
            <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about1.png)">
              <div class="text-wrapper">社長挨拶</div>
            </div>
          </a>
        </div>
      <?php } ?>
      <?php if ($current_page_slug != 'profile') { ?>
      <div class="about--item">
        <a href="<?= get_permalink(get_page_by_path('about/profile')) ?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about2.png)">
            <div class="text-wrapper">会社概要・会社沿革・組織図</div>
          </div>
        </a>
      </div>
      <?php } ?>
      <?php if ($current_page_slug != 'offices') { ?>
      <div class="about--item">
        <a href="<?= get_permalink(get_page_by_path('about/offices')) ?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about3.png)">
            <div class="text-wrapper">事業所・グループ企業</div>
          </div>
        </a>
      </div>
      <?php } ?>
      <?php if ($current_page_slug != 'environmental-policy') { ?>
      <div class="about--item">
        <a href="<?= get_permalink(get_page_by_path('about/environmental-policy')) ?>">
          <div class="item" style="background-image: url(<?= THEME_URI ?>/assets/images/about4.png)">
            <div class="text-wrapper">環境方針</div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
