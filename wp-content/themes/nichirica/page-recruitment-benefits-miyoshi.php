<?php
/*
Template Name: Recruitment Benefits Miyoshi
*/

get_header();
?>

<?php get_template_part('template-parts/header/header-recruitment') ?>
  <div class="sp">
    <?php
    get_template_part('template-parts/banners/banner-no-image');
    ?>
  </div>
  <div class="breadcrumb-area sp size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment')) ?>">採用情報</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('recruitment/benefits')) ?>">...</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>

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


  <div class="breadcrumb-area pc size">
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
          私は機械操作担当として、テープ製品の仕上げ加工に関わる工程を担っています。具体的には、小型の打抜き機、20号スリッター、ナンバリング機の操作を担当しており、これらの機械を使用してテープ製品のサイズや形状をカスタマイズし、顧客のニーズに応える製品を生産しています。
        </p>


      </div>
      <div class="title">
        仕事で大変だったことは何ですか？
      </div>
      <div class="text">
        <p>
          特に苦労したのは、入社前に機械操作に関する経験がほぼ無かったため、機械の操作や刃の交換などを一から学ぶ必要があったことですね。実務経験を積む中で、先輩の助けもあり、少しずつ技術や知識を身に着け、各機械の特性を理解して正確に操作したり、またメンテナンスの技術を習得できました。
        </p>
      </div>
      <div class="title">
        職場の雰囲気について教えてください。
      </div>
      <div class="text">
        <p>
          和気あいあいとした楽しい雰囲気の職場です。また、何か困ったことがあってもチームのメンバーに気軽に相談することができるため、作業に集中できています。
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
          私が自分の成長を感じた瞬間は、複数の機械の操作を一人で担うことになり、それらを無事に扱えるようになったときです。また、自分にとって難しかった刃替えがスムーズにできるようになったことも、自分にとって大きな達成感であり、仕事に対する自信にも繋がりました。
        </p>
      </div>
      <div class="title">
        今後の目標があれば教えてください。
      </div>
      <div class="text">
        <p>
          技術面では、現在担当している機械だけでなく、他の機械の操作やメンテナンスの技術も学び、習得していくことを目標にしています。また、教育面では、新人さんの助けになれるよう、どこが分からないのか、危険個所は無いかなど、相手の立場に立ってアドバイスできるように頑張りたいです。
        </p>
      </div>
    </div>
  </div>

  <div class="recruitment_benefits2 recruitment_benefits_detail section-last size">
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
