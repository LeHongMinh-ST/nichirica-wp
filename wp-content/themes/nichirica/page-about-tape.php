<?php
/*
Template Name: About Tape
*/

get_header();
?>

  <?php get_template_part('template-parts/banners/banner-about2')?>
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
  <div class="about_tape">
    <div class="section-header">
      <div class="section-header--title">ガムテープってなんだろう？</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_tape__content">
      <div class="about_tape--item">
        <div class="image image1">
          <img src="<?=THEME_URI?>/assets/images/about_tape1.png" alt="about_tape">

        </div>
        <div class="message">
          皆さんはガムテープとクラフト粘着テープの違いをご存知ですか？<br><br>
          職場や学校、ご家庭で使用されているテープ製品は、正確には「クラフト粘着テープ」であり、加圧接着する合成接着剤を使用しています。<br><br>
          一方で、弊社の提供している「ガムテープ」は水を湿らせて接着するテープ（再湿活性接着剤仕様）になります。
        </div>
      </div>
    </div>
  </div>
  <div class="about_tape">
    <div class="section-header">
      <div class="section-header--title">ガムテープとクラフト粘着テープの違い</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_tape__content">
      <div class="about_tape--item tape-wrap">
        <div class="tape--item">
          <div class="image">
            <img src="<?=THEME_URI?>/assets/images/about_tape2.png" alt="about_tape">
          </div>
          <div class="content">
            <div class="title">ガムテープ</div>
            <div class="des"><span class="des-bold">片面を水に濡らすと「接着力」が出る</span>天然由来のでんぷんのりを使用したテープ
            </div>
          </div>
        </div>
        <div class="tape--item">
          <div class="image">
            <img src="<?=THEME_URI?>/assets/images/about_tape3.png" alt="about_tape">
          </div>
          <div class="content">
            <div class="title">粘着テープ</div>
            <div class="des"><span class="des-bold">紙や布にべたべたした「粘着剤」が塗られたテープ</span>加圧接着する合成粘着剤を使用
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about_tape mr-bottom-80">
    <div class="section-header">
      <div class="section-header--title">ガムテープってなんだろう？</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_tape__content">

      <div class="about_tape--item ">
        <img src="<?=THEME_URI?>/assets/images/about_tape4.png" alt="about_tape">
      </div>
      <div class="about_tape--item list-type">
        <div class="type-item">
          <div class="type-header">
            <div class="header-text">環境への配慮</div>
            <div class="header-line">
              <div class="line line-center"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="type-content">
            NichiRicaのガムテープ製品は、とうもろこしなどの天然素材を糊に使用しており、自然環境に配慮した製品仕様になっています。そのため、段ボールと一緒にリサイクルすることが可能です。
          </div>
        </div>
        <div class="type-item">
          <div class="type-header">
            <div class="header-text">高い生産性</div>
            <div class="header-line">
              <div class="line line-center"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="type-content">
            封かん作業を行う場合、弊社の提供しているガムテープ繰出し機は、市販の粘着テープハンドカッターと比較して、作業の生産性を20％以上向上させることができます。
          </div>
        </div>
        <div class="type-item">
          <div class="type-header">
            <div class="header-text">セキュリティ</div>
            <div class="header-line">
              <div class="line line-center"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="type-content">
            NichiRicaのガムテープ製品は、市販の粘着テープ製品を使用した場合に比べて、テープが不正に剥がされることなく、完全な状態を維持することができます。
          </div>
        </div>
        <div class="type-item">
          <div class="type-header">
            <div class="header-text">強力な接着力</div>
            <div class="header-line">
              <div class="line line-center"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="type-content">
            NichiRicaのガムテープ製品は、市販の粘着テープ製品に比べて、強固に接着するため、完全密封が可能です。さらに温度変化にも強いのが特徴です。
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
