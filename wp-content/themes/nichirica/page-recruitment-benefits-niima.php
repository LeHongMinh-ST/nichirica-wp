<?php
/*
Template Name: Recruitment Benefits Niima
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
          私の仕事は、テープを作るための糊の調合です。各製品の仕様に合わせて糊の配合を計算して、必要な材料を混ぜ合わせます。作った糊を次工程でテープに塗布する準備をします。また、品質担保のため、調合タンクや調合窯の掃除、機器のメンテナンスも定期的にしています。
        </p>

      </div>
      <div class="title">
        仕事で大変だったことは何ですか？
      </div>
      <div class="text">
        <p>
          糊を作るときに使う薬品がたくさんあり、それぞれがどんな性質なのかを覚えるのが大変でした。また、複数の薬品をうまく組み合わせるため、どう組み合わせるとどんな反応が起きるのか、どんな影響があるのかを理解するのが難しかったです。しかし、先輩に教わったり、自分自身で時間をかけて勉強し、少しずつ理解できるようになりました。毎日が経験となっています。
        </p>
      </div>
      <div class="title">
        職場の雰囲気について教えてください。
      </div>
      <div class="text">
        <p>
          職場の雰囲気は最高です。私たちの職場はチームワークをとても大切にしていて、みんなでお互いを助け合いながら仕事をしています。特に新人で配属されたばかりの頃は、先輩が仕事の仕方や、注意点を丁寧に教えてくれたのでとても助かりました。感謝です。
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
          自分一人で糊の調合作業を成功させたとき、自分の成長を強く感じました。最初は先輩が隣について作業を進めていましたが、徐々に一人でできるようになり、最終的には一人でも任せてもらえるようになりました。この経験を通じて、技術力だけでなく、問題解決能力や判断力がついたと感じています。
        </p>
      </div>
      <div class="title">
        今後の目標があれば教えてください。
      </div>
      <div class="text">
        <p>
          これからは、いろんな職場で経験を積みたいです。具体的には、糊の調合だけでなく、塗工や品質管理など、製造のいろいろな工程を経験して、幅広い知識とスキルを身につけたいと思っています。将来的には、これらの経験を活かして、塗工部門のリーダーとしてチームを引っ張っていきたいです。
        </p>
      </div>
    </div>
  </div>

  <div class="recruitment_benefits2 section-last recruitment_benefits_detail size">
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
