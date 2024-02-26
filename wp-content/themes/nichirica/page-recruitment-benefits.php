<?php
/*
Template Name: Recruitment Benefits
*/

get_header();
?>

<?php get_template_part('template-parts/header/header-recruitment') ?>
<?php get_template_part('template-parts/banners/banner5')?>

  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url()?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment')) ?>">採用情報</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="recruitment_benefits size">
    <div class="section-header">
      <div class="section-header--title">福利厚生</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content recruitment_benefits__content">
      <div class="recruitment_benefits__item">
        <div class="label">勤務形態</div>
        <div class="text-wrapper">週休２日制（土日休み）、フレックスタイム制</div>
      </div>
      <div class="recruitment_benefits__item">
        <div class="label">平均残業時間</div>
        <div class="text-wrapper">約10時間/月</div>
      </div>
      <div class="recruitment_benefits__item">
        <div class="label">保険制度</div>
        <div class="text-wrapper">各種社会保険(雇用保険、労災保険、健康保険、厚生年金保険)</div>
      </div>
      <div class="recruitment_benefits__item">
        <div class="label">休日休暇</div>
        <div class="text-wrapper">夏季休暇・年末年始休暇・慶弔休暇・リフレッシュ休暇</div>
      </div>
      <div class="recruitment_benefits__item">
        <div class="label">出産・育児</div>
        <div class="text-wrapper">産前産後休暇・出産休暇、育児・介護休業</div>
      </div>
      <div class="recruitment_benefits__item">
        <div class="label">住居</div>
        <div class="text-wrapper">住宅手当</div>
      </div>
      <div class="recruitment_benefits__item">
        <div class="label">その他</div>
        <div class="text-wrapper">家族手当、技術能率手当、通勤手当、単身赴任手当、確定拠出年金</div>
      </div>
    </div>
  </div>

  <div class="recruitment_benefits2 size">
    <div class="section-header">
      <div class="section-header--title">社員インタビュー</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content recruitment_benefits2__content">
      <div class="recruitment_benefits2__item" style="background-image: url(<?= THEME_URI?>/assets/images/welfare1.png)">
        <div class="item-content">
          <div class="item-header">
            <div class="title">Sさん</div>
            <div class="line">
              <div class="line-left"></div>
              <div class="line-right"></div>
            </div>
          </div>
          <div class="item-btn">
            <a href="<?= get_permalink(get_page_by_path('recruitment/benefits/niima')) ?>" class="nichi-btn">
              詳しく見る
            </a>
          </div>
        </div>
      </div>
      <div class="recruitment_benefits2__item" style="background-image: url(<?= THEME_URI?>/assets/images/welfare2.png)">
        <div class="item-content">
          <div class="item-header">
            <div class="title">Mさん</div>
            <div class="line">
              <div class="line-left"></div>
              <div class="line-right"></div>
            </div>
          </div>
          <div class="item-btn">
            <a href="<?= get_permalink(get_page_by_path('recruitment/benefits/miyoshi')) ?>" class="nichi-btn">
              詳しく見る
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
get_footer();
