<?php
/*
Template Name: Recruitment Benefits Niima
*/

get_header();
?>

<?php get_template_part('template-parts/header/header-recruitment') ?>
  <div class="banner banner-benefits banner-benefits-pc"
       style="background-image: url(<?= THEME_URI ?>/assets/images/header-ben-1.png)">
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
  <div class="banner banner-benefits banner-benefits-sp"
       style="background-image: url(<?= THEME_URI ?>/assets/images/header-ben-mb-1.png)">
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
          糊の調合・次工程への供給・調合タンクや調合釜の清掃
        </p>

      </div>
      <div class="title">
        仕事で大変だったことは何ですか？
      </div>
      <div class="text">
        <p>
          糊を製造する職場は使用する薬品がたくさんあったりそれぞれ効果も違うので理解するのが大変だった。
        </p>
      </div>
      <div class="title">
        職場の雰囲気について教えてください。
      </div>
      <div class="text">
        <p>
          職場の雰囲気は最高です。<br>職場の仲間と助け合いながら作業ができています。
        </p>
      </div>
      <div class="image">
        <img src="<?= THEME_URI ?>/assets/images/ben1.png" alt="benefit">
      </div>
      <div class="title">
        自分が成長できたと感じたエピソードを教えてください。
      </div>
      <div class="text">
        <p>
          上司、先輩に見守られながら行っていた作業が一人で任せられ、<br>作業を一人でやりこなした時。
        </p>
      </div>
      <div class="title">
        今後の目標があれば教えてください。
      </div>
      <div class="text">
        <p>
          色々な職場を経験して会社を知り、<br>将来は塗工課を引っぱっていく存在になりたい！
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

      <div class="recruitment_benefits2__item"
           style="background-image: url(<?= THEME_URI ?>/assets/images/welfare2.png)">
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
