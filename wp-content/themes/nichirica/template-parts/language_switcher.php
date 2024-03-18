<?php

$array = trp_custom_language_switcher();
?>
<?php if ( apply_filters( 'trp_allow_tp_to_run', true ) ){ ?>
  <ul class="list-locale" data-no-translation >
    <li class="item-locale"><a href="<?= $array['ja']['current_page_url'] ?>">日本語</a></li>
    <li class="item-locale">/</li>
    <li class="item-locale"><a href="<?=$array['en_US']['current_page_url']?>">English</a></li>
  </ul>
<?php } ?>
