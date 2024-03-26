<?php

$array = trp_custom_language_switcher();
$home = get_home_url();
$url = str_replace('/en', '', $home);
?>
<?php if ( apply_filters( 'trp_allow_tp_to_run', true ) ){ ?>
  <ul class="list-locale" data-no-translation >
    <li class="item-locale"><a href="<?= $url ?>">日本語</a></li>
    <li class="item-locale">/</li>
    <li class="item-locale"><a href="<?=$url?>/en">English</a></li>
  </ul>
<?php } ?>
