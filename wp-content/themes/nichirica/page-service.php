<?php
/*
Template Name: Service
*/

get_header();
?>

<?php get_template_part('template-parts/banners/banner2')?>

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

  <div class="service size">
    <div class="section-header">
      <div class="section-header--title">受託塗工</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content service--list">
      <div class="service--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/service1.png" alt="service">
        </div>
        <div class="item-description">
          当社は各種塗料の自社内調合を可能とするため、複数の重合釜、混合釜、分散機を保有しています。<br><br>
          これら保有設備により、当社主要製品の『ガムテープ糊』、『自着糊』、『圧着はがき糊』、『各種粘着剤』の社内調合を実現しています。<br><br>
          更に顧客様の『こんな糊を作りたい。』のご要望に対して、設計、テスト調合、性能確認まで様々なご協力にお応えします。<br><br>
        </div>
      </div>
    </div>
  </div>
  <div class="service size">
    <div class="section-header">
      <div class="section-header--title">水糊・自着糊等の技術</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content service--list">
      <div class="service--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/service2.png" alt="service">
        </div>
        <div class="item-description">
          ７０余年前に膠水溶液から始まった当社の水糊（再湿活性接着剤）は、社内研鑽を経て１９６０年代に現在のでん粉主体の水糊へと変貌して参りました。<br><br>
          当社では、各種でん粉の溶解、分解、端末重合の社内調合に注力し、他社では実現が難しいでん粉原材料のコントロールを行うことで、様々なニーズにお応えします。<br><br>
          『でん粉を主体としたサステナブルなテープを使いたい。』など、これからの社会ニーズにお応えするべく、当社はこれからも精進して参ります。<br><br>
        </div>
      </div>
      <div class="service--item">
        <div class="item-image">
          <img src="<?= THEME_URI ?>/assets/images/service3.png" alt="service">
        </div>
        <div class="item-description">
          当社は、天然ゴム同士の相溶効果による界面消失性能に着目し５０余年『自着テープ』を製造販売して参りました。<br><br>
          最近では紙媒体は勿論なこと、合成紙、フィルム媒体への塗膜成形技術も確立して参りました。<br><br>
          強固な自着性能だけに留まらず、当社所有調合技術を活用した自着力の調整、追加性能の付与も実現可能です。<br><br>
          『しっかりくっ付けたいが、糊残りは困る』ようなご要望がございましたら、お気軽にご相談下さい。<br><br>
        </div>
      </div>
    </div>
  </div>

  <div class="service size">
    <div class="section-header">
      <div class="section-header--title">作業工程</div>
      <div class="section-header--line">
        <div class="line"></div>
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
            <div class="engineering-description-title">調合</div>
            <div class="engineering-description-text">
              当社は、天然ゴム同士の相溶効果による界面消失性能に着目し５０余年『自着テープ』を製造販売して参りました。<br><br>
              最近では紙媒体は勿論なこと、合成紙、フィルム媒体への塗膜成形技術も確立して参りました。<br><br>
              強固な自着性能だけに留まらず、当社所有調合技術を活用した自着力の調整、追加性能の付与も実現可能です。<br><br>
              『しっかりくっ付けたいが、糊残りは困る』ようなご要望がございましたら、お気軽にご相談下さい。<br><br>
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
            <div class="engineering-description-title">塗工</div>
            <div class="engineering-description-text">
              当社は、天然ゴム同士の相溶効果による界面消失性能に着目し５０余年『自着テープ』を製造販売して参りました。<br><br>
              最近では紙媒体は勿論なこと、合成紙、フィルム媒体への塗膜成形技術も確立して参りました。<br><br>
              強固な自着性能だけに留まらず、当社所有調合技術を活用した自着力の調整、追加性能の付与も実現可能です。<br><br>
              『しっかりくっ付けたいが、糊残りは困る』ようなご要望がございましたら、お気軽にご相談下さい。<br><br>
            </div>
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
            <div class="engineering-description-title">加工</div>
            <div class="engineering-description-text">
              当社は、天然ゴム同士の相溶効果による界面消失性能に着目し５０余年『自着テープ』を製造販売して参りました。<br><br>
              最近では紙媒体は勿論なこと、合成紙、フィルム媒体への塗膜成形技術も確立して参りました。<br><br>
              強固な自着性能だけに留まらず、当社所有調合技術を活用した自着力の調整、追加性能の付与も実現可能です。<br><br>
              『しっかりくっ付けたいが、糊残りは困る』ようなご要望がございましたら、お気軽にご相談下さい。<br><br>
            </div>
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
            <div class="engineering-description-title">包装・出荷 </div>
            <div class="engineering-description-text">
              当社は、天然ゴム同士の相溶効果による界面消失性能に着目し５０余年『自着テープ』を製造販売して参りました。<br><br>
              最近では紙媒体は勿論なこと、合成紙、フィルム媒体への塗膜成形技術も確立して参りました。<br><br>
              強固な自着性能だけに留まらず、当社所有調合技術を活用した自着力の調整、追加性能の付与も実現可能です。<br><br>
              『しっかりくっ付けたいが、糊残りは困る』ようなご要望がございましたら、お気軽にご相談下さい。<br><br>
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
