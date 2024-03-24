<?php
/*
Template Name: Service
*/

get_header();
?>

<?php get_template_part('template-parts/banners/banner2') ?>

  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>

  <div class="service size">
    <div class="section-content service--list">
      <div class="service--item">
        <div class="item-image">
          <div class="section-header">
            <div class="section-header--title">技術と伝統の融合 - テープを通じたNichiRicaの使命と社会貢献</div>
            <div class="section-header--line">
              <div class="line line-center"></div>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="item-description">
          １９５０年代国内の急速なダンボール普及あるいは、建設需要を受ける形で製造を開始した当社主力製品のガムテープは開発当初からワンストップ生産を目指し研究・開発を進めて参りました。中興の研究・開発精神は現在も脈々と受け継がれ、現在も当社は原材料からお客様の要望される製品仕様までの一貫生産を念頭に社会に提供することで、事業価値の最大化を実現、ステークホルダーすべてを豊かにする企業を目指しています。
         </div>
      </div>
    </div>
  </div>
  <div class="service size">
    <div class="section-header">
      <div class="section-header--title">水糊・自着糊等の技術</div>
      <div class="section-header--line">
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content service--list">
      <div class="service--item">
        <di1v class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/service2.png" alt="service">
        </di1v>
        <div class="item-description">
          ７０余年前ににかわ水溶液から始まった当社の水糊（再湿活性接着剤）は、社内研鑽を経て１９６０年代に現在のでんぷん主体の水糊へと進化して参りました。<br><br>
          当社では、各種でんぷんの溶解、分解、端末重合の社内調合に注力し、他社では実現が難しいでんぷん原材料のコントロールを行うことで、様々なニーズにお応えします。<br><br>
          『でんぷんを主体とした環境に配慮したテープを使いたい。』など、これからの社会ニーズにお応えするべく、当社はこれからも精進して参ります。<br><br>
        </div>
      </div>
      <div class="service--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/service3.png" alt="service">
        </div>
        <div class="item-description">
          当社は、天然ゴム同士の相溶効果による界面消失性能に着目し５０余年『自着テープ』を製造販売して参りました。<br><br>
          最近では紙媒体は勿論なこと、合成紙、フィルムへの塗膜成形技術も確立して参りました。<br><br>
          強固な自着性能だけに留まらず、当社所有調合技術を活用した自着力の調整、追加性能の付与も実現可能です。<br><br>
          『しっかりくっつけたいが、糊残りは困る』ようなご要望がございましたら、お気軽にご相談下さい。<br><br>
          <span class="note">
            ※界面消失性能...特定の材料や化学物質同士が接触した時に、均一に混ざり合う能力のこと。また、良く混ざり合い一つの均一な材料になること。
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="service size">
    <div class="section-header">
      <div class="section-header--title">各工程におけるNichiRicaの技術</div>
      <div class="section-header--line">
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content engineering-list">
      <div class="engineering-item">
        <div class="engineering-colum">
          <div class="triangle"></div>
          <div class="column-number">1</div>
        </div>
        <div class="engineering-content">
          <div class="engineering-image">
            <img src="<?= THEME_URI ?>/assets/images/en1.png" alt="en">
          </div>
          <div class="engineering-description">
            <div class="engineering-description-title">接着剤調合技術</div>
            <div class="engineering-description-text">
              当社は各種塗料の自社内調合を可能とするため、複数の重合釜、混合釜、分散機を保有しています。これら保有設備により、当社主要製品の『ガムテープ糊』、『自着糊』、『圧着はがき糊』、『各種粘着剤』の社内調合を実現しています。更にお客様の『こんな糊を作りたい』といったご要望に対して、設計、テスト調合、性能確認まで様々な形でご対応いたします。
            </div>
          </div>
        </div>
      </div>
      <div class="engineering-item">
        <div class="engineering-colum">
          <div class="triangle"></div>
          <div class="column-number">2</div>
        </div>
        <div class="engineering-content">
          <div class="engineering-image">
            <img src="<?= THEME_URI ?>/assets/images/en2.png" alt="en">
          </div>
          <div class="engineering-description">
            <div class="engineering-description-title">塗工技術</div>
            <div class="engineering-description-text">
              当社は２台の塗工機を保有し、水系・溶剤系の各種塗料の最適なコーティングを提供しています。各塗工機は複数のコーティング方式を有し、薄膜～厚膜塗工まで自在な塗布量コントロールが可能で、お客様のニーズに合わせ 様々な特性の塗料を好適な塗布量で塗布、ご提供することが可能です。            </div>
          </div>
        </div>
      </div>
      <div class="engineering-item">
        <div class="engineering-colum">
          <div class="triangle"></div>

          <div class="column-number">3</div>
        </div>
        <div class="engineering-content">
          <div class="engineering-image">
            <img src="<?= THEME_URI ?>/assets/images/en3.png" alt="en">
          </div>
          <div class="engineering-description">
            <div class="engineering-description-title">加工技術</div>
            <div class="engineering-description-text">
              当社は保有する多種多様の加工機でお客様のご希望される製品形態への加工をご提供します。テープスリットはもちろんのこと、ジャンボロール加工、印刷による加飾、ラベル打抜き、特殊穴開け、押し切りスリット、平半シートなど様々なご要望にお応えします。            </div>
          </div>
        </div>
      </div>
      <div class="engineering-item">
        <div class="engineering-colum">
          <div class="triangle"></div>

          <div class="column-number">4</div>
        </div>
        <div class="engineering-content">
          <div class="engineering-image">
            <img src="<?= THEME_URI ?>/assets/images/en4.png" alt="en">
          </div>
          <div class="engineering-description">
            <div class="engineering-description-title">包装・出荷</div>
            <div class="engineering-description-text">
              当社では各種製品の形態に合わせた封かん・包装を行い製品を出荷しております。<br><br>
              具体的には、パレタイズによるケーシングなど自動化による作業効率の改善を図る一方で、特に大きな製品については、作業員がひとつひとつ手作業で丁寧に対応しています。
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-footer text-center">
      <a href="<?= get_permalink(get_page_by_path('inquiry')) ?>" class="nichi-btn">
        <span class="text">お問い合わせ</span>
        <img class="arrow" src="<?= THEME_URI ?>/assets/images/arrow-right.svg" alt="arrow">
      </a>
    </div>
  </div>

<?php
get_footer();
