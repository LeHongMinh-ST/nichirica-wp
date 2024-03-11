<?php

$bg = get_the_post_thumbnail_url(get_the_ID());
if (!$bg) {
  $bg = THEME_URI . '/assets/images/header5.png';
}
?>

<div class="banner" style="background-image: url(<?= $bg ?>)">
  <div class="section-header">
    <div class="section-header--title"><?php single_post_title(); ?></div>
    <div class="section-header--line">
      <div class="line"></div>
      <div class="line line-center"></div>
      <div class="line"></div>
    </div>
  </div>
</div>
