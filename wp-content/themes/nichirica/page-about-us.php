<?php
/*
Template Name: About Us
*/

get_header();
?>

  <?php get_template_part('template-parts/banners/banner-about1')?>
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
  <div class="about_us mr-top-80">
    <div class="section-header">
      <div class="section-header--title">ガムテープってなんだろう？</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_us__content">
      <div class="about_us--item">
        株式会社NichiRicaは主にガムテープ製品の製造・販売を行っている会社です。でんぷんを主原料とした糊の調合から、お客様のニーズに合わせた様々なテープ製品の塗工や加工、また包装や出荷まで自社で一貫して行っています。
      </div>
      <div class="about_us--item">
        <img src="<?=THEME_URI?>/assets/images/about_us1.png" alt="about_us">
      </div>
    </div>
  </div>
  <div class="about_us">
    <div class="section-header">
      <div class="section-header--title">NichiRicaの成り立ち</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_us__content">
      <div class="about_us--item">
        株式会社NichiRicaの歴史は、1933年（昭和8年）に東京都牛込区で「株式会社日本理化製紙所」として創業されたことに始まります。<br><br>
        当時はパーチメント紙（硫酸紙）の製造を主要事業としていましたが、スピーカーコーン紙や合板用、包装用ガムテープ、フートーテープの製造販売を行うなど、時代に合わせて事業を拡大しています。<br><br>
        創業以来、私たちは品質と革新にこだわり続け、お客様の信頼と期待に応える製品とサービスを提供してまいりました。<br><br>
        今後も私たちは、創業時の精神と自社で培ってきた技術を継承し、巴川グループの一員としてさらなる成長と発展を目指してまいります。
      </div>
      <div class="about_us--item">
        <img src="<?=THEME_URI?>/assets/images/about_us2.png" alt="about_us">
      </div>
    </div>
  </div>
  <div class="about_us mr-bottom-80">
    <div class="section-header">
      <div class="section-header--title">ガムテープってなんだろう？</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_us__content">
      <div class="about_us--item">
        NichiRicaは、主原料である「でんぷん」を中心にお客様の多岐にわたるニーズ・製品機能にお応えできる「糊」を１から作成し、製品機能にマッチングした塗料の調合ノウハウを有します。<br><br>
        また、紙コーティングから高クリーン度を要するフィルムコーティング、各種多様な塗料性能対応、塗工幅に対応可能で、特殊なスリットや穴開け加工・打ち抜き加工、印刷等、多様なサービスを提供します。
      </div>
      <div class="about_us--item img-last">
        <img src="<?=THEME_URI?>/assets/images/about_us3.png" alt="about_us">
      </div>
    </div>
  </div>

<?php
get_footer();
