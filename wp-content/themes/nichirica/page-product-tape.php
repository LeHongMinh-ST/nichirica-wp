<?php
/*
Template Name: Product Tape
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
  <div class="products_detail size tape">
    <div class="section-header">
      <div class="header">水付けガムテープ</div>
      <div class="line"></div>
    </div>
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            手動式ディスペンサー
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/tape1.png " alt="product">
          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">ガムテープ</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">段ボール箱の封緘、包装紙の目止め用</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>水を付けることで接着性が出るテープ。</li>
                <li>
                  紙、糊共に天然素材で自然環境に優しい構成 （紙：クラフト紙、晒クラフト紙、糊：澱粉糊）。
                </li>
                <li>
                  澱粉糊は、日本古来使用されており、経年劣化しないことが認められている。
                </li>
                <li>
                  テープ表面に剥離剤を使用していない為、重ね貼り、捺印、筆記、印刷が可能。
                </li>
                <li>
                  冷凍温度（-40℃）から高温（100℃）まで接着力を維持することが可能。
                </li>
              </ul>

            </div>
          </div>

        </div>
      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            ガムテープ印刷
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/tape2.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">ガムテープ印刷</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">段ボール箱の封緘、包装紙の目止め用</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>水を付けることで接着性が出るテープ。</li>
                <li>
                  テープ表面に印刷加工が可能
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            糸入りガムテープ
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/tape3.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">糸入りガムテープ</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">内容量の重い段ボールの封緘</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>水を付けることで接着性が出るテープ。</li>
                <li>
                  糸が組み込まれており、強度がある。
                </li>
              </ul>

            </div>
          </div>
        </div>

      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            合板テープ
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/tape4.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">合板テープ</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">単板の板割れ、亀裂防止及び接合。</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              機械貼り、手貼りにて単板の接合に使用。
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="products_detail size tape">
    <div class="section-header">
      <div class="header">両面粘着テープ関連製品</div>
      <div class="line"></div>
    </div>
    <div class="section-content products_detail__content">
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            フートーテープ
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/tape6.png " alt="product">
          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">フートーテープ</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">封筒の口貼り用</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>従来の封筒口糊に変わる特殊両面粘着テープ。</li>
                <li>
                  従来の封筒口糊に変わる特殊両面粘着テープ
                </li>
                <li>
                  各種封筒サイズに応じ、規格を設けています。
                </li>
              </ul>

            </div>
          </div>
          <div class="item">
            <div class="label">代表規格:</div>
            <div class="message">基材レス、ドライエッジ</div>
          </div>
        </div>

      </div>
      <div class="products_detail__item">
        <div class="header">
          <div class="header-title">
            フリーテープ
          </div>
          <div class="header-image">
            <img src="<?= THEME_URI ?>/assets/images/tape6.png " alt="product">

          </div>
        </div>
        <div class="content">
          <div class="item">
            <div class="label">製品名:</div>
            <div class="message">フリーテープ</div>
          </div>
          <div class="item">
            <div class="label">用途:</div>
            <div class="message">封筒の口貼り用、事務一般用、ビジネスレターケースの口貼り用</div>
          </div>
          <div class="item">
            <div class="label">特徴:</div>
            <div class="message">
              <ul>
                <li>フリーテープＬＴ ・・・ 無色透明の糊で支持体がありません。</li>
                <li>
                  フリーテープＹ ・・・ 支持体があり、中粘着タイプです。
                </li>
              </ul>

            </div>
          </div>
          <div class="item">
            <div class="label">代表規格:</div>
            <div class="message">フリーテープＬＴ、フリーテープＹ</div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <?= get_template_part('template-parts/banners/banner-footer')?>
<?php
get_footer();
