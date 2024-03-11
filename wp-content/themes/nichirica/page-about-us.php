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
        株式会社NichiRicaは自然環境にやさしい天然由来成分を主とした、紙やフィルムなどの加工製品の製造・販売を行っている会社です。<br><br>
        紙加工製品の機能性接着剤の自社内調合から、お客様のニーズに合わせた塗工・加工、また包装や出荷まで一貫して実施しています。
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
        株式会社NichiRicaは、1933年（昭和8年）に東京都牛込区で「株式会社日本理化製紙所」として創業されたことに始まります。<br><br>
        当時はパーチメント紙（硫酸紙）の製造を主要事業として起業しましたが、スピーカーコーン紙、合板用、包装用ガムテープ、封筒用口貼りテープ、マスキングやチューブ結束に用いる自着テープ、特種ラベル、圧着はがき用紙、特殊包装資材シートの製造販売を行うなど、時代のニーズを的確にキャッチして事業を拡大してきました。<br><br>
        創業以来、私たちは品質と革新にこだわり続け、お客様の信頼と期待に応える製品とサービスを提供しています。<br><br>
        創業時の精神と自社で培ってきた技術を継承・進化させ、次世代につながる自然環境にやさしい製品づくりを推進し、TOMOEGAWAグループの一員としてさらなる成長と発展を目指してまいります。
      </div>
      <div class="about_us--item">
        <img src="<?=THEME_URI?>/assets/images/about_us2.png" alt="about_us">
        <p>昭和34年竣工当時の草薙工場</p>
      </div>
    </div>
  </div>
  <div class="about_us mr-bottom-80">
    <div class="section-header">
      <div class="section-header--title">NichiRicaの技術</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_us__content">
      <div class="about_us--item">
        NichiRicaは、主原料である天然由来の「でんぷん」を中心にお客様の多岐にわたるニーズ・製品機能にお応えできる「機能性接着剤」を１から作成し、製品機能にマッチングした塗料の調合ノウハウを有します。<br><br>
        また、紙コーティングから高クリーン度を要するフィルムコーティング、各種多様な塗料性能、塗工幅に対応可能で、ロール化、シート化、特殊なスリットや穴開け加工・打ち抜き加工、印刷等、多様なサービスを提供します。
      </div>
      <div class="about_us--item img-last">
        <img src="<?=THEME_URI?>/assets/images/about_us3.png" alt="about_us">
      </div>
    </div>
  </div>

<?php
get_footer();
