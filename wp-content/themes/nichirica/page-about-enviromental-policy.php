<?php
/*
Template Name: About Environmental Policy
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
          <a href="<?= get_permalink(get_page_by_path('about')) ?>">社長挨拶</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="about_environmental_policy size">
    <div class="section-header">
      <div class="section-header--title">環境方針</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_environmental_policy__content">
      <div class="about_environmental_policy__item">
        <div class="header">
          <span class="header-text">基本理念</span>
        </div>
        <div class="content">
          NichiRicaは経営理念「誠実・社会貢献・開拓者精神」を原点とし、地球規模の環境保全を実現するために、「事業活動と環境との調和」を重要課題として、全従業員の参加による環境保全活動に努める。
        </div>
      </div>
      <div class="about_environmental_policy__item">
        <div class="header">
          <span class="header-text">基本方針</span>
        </div>
        <div class="content">
          NichiRicaは以下の方針に基づき、研究・開発・製造・販売における活動、製品及びサービスの提供と環境との調和を目指す。
          <ul>
            <li type="1">
              環境目標及び環境活動計画を定め、その実現を図ると共に、環境経営システムを構築・運用して継続改善に努める。
            </li>
            <li type="1">
              環境関連の法規及びその他の要求事項に適切に対応し、尊守する。
            </li>
            <li type="1">
              環境経営システムの構築・取組みを適切に実行するために、従業員に必要な教育・訓練を実施する。
            </li>
            <li type="1">
              環境活動レポートを作成し、社外の求めに応じ、いつでも公表する。また、社外からの環境に対する苦情や要望を受付け、必要な対応を行う。
            </li>
            <li type="1">
              重要施策として以下の項目に取組み、地域温暖化防止・資源の有効活用・環境汚染の予防推進に努める。
              <ul>
                <li type="a">
                  環境に配慮した製品の開発に努める。
                </li>
                <li type="a">
                  温室効果ガスの排出削減を図る。
                </li>
                <li type="a">
                  産業廃棄物の発生を削減する。
                </li>
                <li type="a">
                  排水を管理し、地域の環境の改善と保全に努める。
                </li>
                <li type="a">
                  環境関連物質及び製品含有化学物質を管理し、使用の削減・廃止に努める。
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="about_environmental_policy__item">
        <div class="header">
          <span class="header-text">環境行動</span>
        </div>
        <div class="content">
          <div class="sub-header">
            CO2削減
          </div>
          <ul>
            <li>エコ設備の導入</li>
            <li>電力デマンド管理</li>
          </ul>

          <div class="sub-header">
            環境負荷物質削減
          </div>
          <ul>
            <li>エコ設備の導入</li>
            <li>電力デマンド管理</li>
          </ul>
        </div>
      </div>
      <div class="about_environmental_policy__item">
        <div class="header">
          <span class="header-text">資源分別</span>
        </div>
        <div class="content">
          廃棄物から再資源・循環資源を分別し、リサイクルに貢献する。
        </div>
      </div>
      <div class="about_environmental_policy__item">
        <div class="header">
          <div class="header-text">SDGsへの取り組み</div>
        </div>
        <div class="content">
          エコアクション21の活動を通して、環境への負荷を軽減する取り組みを行い、持続可能な社会の実現を目指す。
        </div>
      </div>
    </div>
  </div>
<?php get_template_part('template-parts/about/read-together') ?>
<?php
get_footer();
