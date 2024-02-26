<?php
/*
Template Name: Recruitment Benefits Miyoshi
*/

get_header();
?>

<?php get_template_part('template-parts/header/header-recruitment') ?>
  <div class="banner banner-benefits banner-benefits-pc"
       style="background-image: url(<?= THEME_URI ?>/assets/images/header-ben-2.png)">
    <div class="section-header">
      <div class="section-header-wrap">
        <div class="section-header--sub-title">社員インタビュー</div>
        <div class="section-header--title">Mさん</div>
        <div class="section-header--line">
          <div class="line line-center"></div>
          <div class="line"></div>
        </div>
        <div class="section-header--title-last">製造部仕上課</div>
      </div>
    </div>
  </div>
  <div class="banner banner-benefits banner-benefits-sp"
       style="background-image: url(<?= THEME_URI ?>/assets/images/header-ben-mb-2.png)">
    <div class="section-header">
      <div class="section-header-wrap">
        <div class="section-header--sub-title">社員インタビュー</div>
        <div class="section-header--title">Sさん</div>
        <div class="section-header--line">
          <div class="line line-center"></div>
          <div class="line"></div>
        </div>
        <div class="section-header--title-last">塗工課製糊係</div>
      </div>
    </div>
  </div>


  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment')) ?>">採用情報</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/benefits')) ?>">福利厚生・社員インタビュー</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="recruitment_benefits_detail size">
    <div class="section-content recruitment_benefits_detail__content">
      <div class="title">
        業務内容について教えてください。
      </div>
      <div class="text">
        <p>
          オペレーターです。（機械操作担当）
        </p>
        <p>
          小型打抜き機、20号スリッター、ナンバリング機を担当しています。　　　　
        </p>

      </div>
      <div class="title">
        仕事で大変だったことは何ですか？
      </div>
      <div class="text">
        <p>
          機械を動かしたことが無かったので操作方法や刃替えなど覚えることが多くて大変でした。
        </p>
      </div>
      <div class="title">
        職場の雰囲気について教えてください。
      </div>
      <div class="text">
        <p>
          和気あいあいとした楽しい職場です
        </p>
      </div>
      <div class="image">
        <img src="<?= THEME_URI ?>/assets/images/ben2.png" alt="benefit">
      </div>
      <div class="title">
        自分が成長できたと感じたエピソードを教えてください。
      </div>
      <div class="text">
        <p>
          幾つもの機械を任せられそれが操作できた時、成長できたんだなと感じました。特に刃替えが難しかったのでそれが出来るようになって嬉しかったです。
        </p>
      </div>
      <div class="title">
        今後の目標があれば教えてください。
      </div>
      <div class="text">
        <p>
          他の機械も覚えたいです。
        </p>
      </div>
    </div>
  </div>

  <div class="recruitment_benefits2 recruitment_benefits_detail size">
    <div class="section-header">
      <div class="section-header--title">その他の社員インタビューを見る</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content recruitment_benefits2__content">

      <div class="recruitment_benefits2__item" style="background-image: url(<?= THEME_URI ?>/assets/images/welfare1.png)">
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
    </div>
  </div>


<?php
get_footer();
