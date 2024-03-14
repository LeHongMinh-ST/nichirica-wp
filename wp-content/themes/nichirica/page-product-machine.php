<?php
/*
Template Name: Product Machine
*/

get_header();
?>


<?php get_template_part('template-parts/banners/banner-no-image')?>

  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url()?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('product')) ?>">製品情報</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="products_detail size machine">
    <div class="section-header">
      <div class="header">ガムテープディスペンサー</div>
      <div class="header-line">
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div id="duct tape dispenser"></div>
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            BP755EJA
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine1.png " alt="product">
          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">BP755EJA</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">ガムテープ手動繰出し機</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              同じ長さ設定で沢山貼り付ける場合に適している。
            </div>
          </div>

        </div>
      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            BP555
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine2.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">BP555</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">ガムテープ手動繰出し機</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              色々な箱のサイズに素早く対応できる。
            </div>
          </div>
        </div>
      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            BP333JX
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine3.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">BP333JX</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">ガムテープ手動繰出し機</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              安価で効率的な貼り付け作業が実現できる

            </div>
          </div>
        </div>

      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            GTD-500
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine4.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">GTD-500</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">ガムテープ手動繰出し機</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              色々な箱のサイズに素早く対応でき、しかも本体が安価なタイプ
            </div>
          </div>
        </div>

      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            HGD-1
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine5.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">HGD-1</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">ガムテープハンドディスペンサー
              （※小巻仕様のみ）</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              安く簡易的にガムテープで作業したい方におすすめ！
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="products_detail size machine" id="double-sided">
    <div class="section-header">
      <div class="header">両面粘着テープ自動貼付機</div>
      <div class="header-line">
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            FT-1000N2
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine6.png " alt="product">
          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">FT-1000N2</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">両面粘着テープをセットした長さに自動で貼り付ける</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              両面テープ対応幅５～１５ｍｍ、奥行き４０ｍｍの位置に貼り付ける

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <div class="products_detail size machine" id="sealing">
    <div class="section-header">
      <div class="header">自動封かん機</div>
      <div class="header-line">
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            UC-102
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/machine7.png " alt="product">
          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">UC-102</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">ガムテープを用いて自動的に封かんするシステム</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              製造現場のニーズに合わせて、封かんシステムの提案が可能。
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


<?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
