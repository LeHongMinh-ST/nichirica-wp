<?php
/*
Template Name: About Message
*/

get_header();
?>
<?php get_template_part('template-parts/header/header-about') ?>
<?php get_template_part('template-parts/banners/banner1') ?>
  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about')) ?>">企業情報</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="about_message size">
    <div class="section-content about_message__content about_message__content_pc">
      <div class="about_message__left">
        <div class="header title">
          トップメッセージ
        </div>
        <div class="content">
          <div class="message">
            「自然環境と共生するイノベーション <br>　- NichiRicaの未来への約束」
            <br>
            <br>
            <br>
            1933年の設立以来、株式会社巴川コーポレーションのグループ会社であるNichiRicaは、粘着・接着製品をはじめとする多様な加工製品の開発に取り組んできました。私たちの主力製品には、包装用・合板用ガムテープ、自着テープ、封筒口貼り両面テープ、圧着はがき用紙などがあり、これらは主に自然由来のでんぷんやセルロースを原料としています。これにより、環境に優しいだけでなく、リサイクル可能な製品群を構築しています。
            <br>
            <br>
            <br>
            また、長年にわたる塗工・加工技術の研鑽を通じて、クリーンコーティングマシン及び関連加工設備の導入を実現しました。これにより、クリーン環境下での光学粘着製品加工や電子材料向け粘着加工などの製造受託業務においても顕著な成果を上げています。
            <br>
            <br>
            <br>
            経営理念として、「誠実」「社会貢献」「開拓者精神」を掲げるNichiRicaは、お客様、市場、そして社会全体のニーズに応え続けることを使命としています。この理念に基づき、私たちは革新的な製品とサービスを通じて、持続可能な未来への貢献を目指します。
            <br>
            <br>
            <br>
            今後も、自然環境と共生し、社会に価値を提供し続ける企業として、NichiRicaは皆様と共に歩んでまいります。
            <br>
            <br>
            <div class="mess-footer">
              株式会社NichiRica <br> 代表取締役社長 <br> <br>
            <b>島 章嘉</b>
            </div>
          </div>
        </div>
      </div>
      <div class="about_message__right">
        <img src="<?= THEME_URI ?>/assets/images/president1.png" alt="president1" class="about_message__image">
      </div>
    </div>
    <div class="section-content about_message__content about_message__content_mb">
      <div class="about_message__left">
        <div class="header title">
          トップメッセージ
        </div>
        <div class="content">
          <div class="content_image">
            <img src="<?= THEME_URI ?>/assets/images/president1.png" alt="president1" class="about_message__image">
          </div>
          <div class="message">
            「自然環境と共生するイノベーション <br>　- NichiRicaの未来への約束」
            <br>
            <br>
            <br>
            1933年の設立以来、株式会社巴川コーポレーションのグループ会社であるNichiRicaは、粘着・接着製品をはじめとする多様な加工製品の開発に取り組んできました。私たちの主力製品には、包装用・合板用ガムテープ、自着テープ、封筒口貼り両面テープ、圧着はがき用紙などがあり、これらは主に自然由来のでんぷんやセルロースを原料としています。これにより、環境に優しいだけでなく、リサイクル可能な製品群を構築しています。
            <br>
            <br>
            <br>
            また、長年にわたる塗工・加工技術の研鑽を通じて、クリーンコーティングマシン及び関連加工設備の導入を実現しました。これにより、クリーン環境下での光学粘着製品加工や電子材料向け粘着加工などの製造受託業務においても顕著な成果を上げています。
            <br>
            <br>
            <br>
            経営理念として、「誠実」「社会貢献」「開拓者精神」を掲げるNichiRicaは、お客様、市場、そして社会全体のニーズに応え続けることを使命としています。この理念に基づき、私たちは革新的な製品とサービスを通じて、持続可能な未来への貢献を目指します。
            <br>
            <br>
            <br>
            今後も、自然環境と共生し、社会に価値を提供し続ける企業として、NichiRicaは皆様と共に歩んでまいります。
            <br>
            <br>

            <div class="mess-footer">
              株式会社NichiRica <br> 代表取締役社長 <br> <br>
            <b>島 章嘉</b>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_template_part('template-parts/about/read-together') ?>
<?php
get_footer();
