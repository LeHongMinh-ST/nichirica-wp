<?php
/*
Template Name: FAQ
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
        </li>        <li>
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
  <div class="faq size">
    <div class="wrapTop">
      <div class="itemContent">
        <div class="title">
          仕事について
        </div>
        <div class=" accordion noneBorder qa" id="accordionExample">
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading1">
              <div class="accordion-button noneBorder noneBg collapsed">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q1" class="scroll-link">
                  <span class="txt-color-main">配属はどのように決まりますか？</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading2">
              <div class="accordion-button noneBorder noneBg collapsed">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q2" class="scroll-link">
                  <span class="txt-color-main">入社後のジョブローテーションや希望による異動はありますか？</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading3">
              <div class="accordion-button noneBorder noneBg collapsed">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q3" class="scroll-link">
                  <span class="txt-color-main">   NichiRicaの社風を教えてください。</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading4">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q4" class="scroll-link">
                  <span class="txt-color-main">   勤務時間を教えてください。</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading5">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q5" class="scroll-link">
                  <span class="txt-color-main">   残業はありますか？</span>
                </a>
              </div>
            </h2>

          </div>
        </div>
      </div>
      <div class="itemContent">
        <div class="title">
          選考について
        </div>
        <div class=" accordion noneBorder qa" id="accordionExample">
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading6">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q6" class="scroll-link">
                  <span class="txt-color-main">エントリー時に資格は必要ですか?また資格は採用の条件になりますか?</span>
                </a>
              </div>
            </h2>

          </div>
        </div>
      </div>
      <div class="itemContent">
        <div class="title">
          福利厚生について
        </div>
        <div class=" accordion noneBorder qa" id="accordionExample">
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading7">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q7" class="scroll-link">
                  <span class="txt-color-main">選考の流れを教えてください。</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading8">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q7" class="scroll-link">
                  <span class="txt-color-main">資格取得に関する支援制度などはありますか?</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading9">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q8" class="scroll-link">
                  <span class="txt-color-main">休日、休暇について教えてください。</span>

                </a>
              </div>
            </h2>

          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading10">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q8" class="scroll-link">
                  <span class="txt-color-main">評価制度について教えてください。</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading11">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q9" class="scroll-link">
                  <span class="txt-color-main">育児休暇はありますか。</span>
                </a>
              </div>
            </h2>
          </div>
          <div class="accordion-item noneBorder noneBg">
            <h2 class="accordion-header" id="heading12">
              <div class="accordion-button noneBorder noneBg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                <div class="image-arr">
                  <img  src="<?= THEME_URI?>/assets/images/arr-down.svg" alt="">
                </div>
                <a href="<?= get_permalink(get_queried_object_id()) ?>#q9" class="scroll-link">
                  <span class="txt-color-main">福利厚生について教えてください。</span>

                </a>
              </div>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="wapBot">
      <div class="title">仕事について</div>
<!--      <div class="section-header--line w-100">-->
<!--        <div class="line"></div>-->
<!--        <div class="line line-center"></div>-->
<!--        <div class="line"></div>-->
<!--      </div>-->
      <div class="content">
        <div class="item_q" id="q1">配属はどのように決まりますか？</div>
        <div class="item_a">所属部署は面接のなかでご本人の希望をお伺いした後、適性や今後のキャリアも踏まえ入社後に配属先を最終決定します。</div>

        <div class="item_q" id="q2">入社後のジョブローテーションや希望による異動はありますか？</div>
        <div class="item_a">新規プロジェクトの立上げなどで適切な方に任せる場合や、ご本人のキャリアの幅を広げるためなどで、部門内のみならず部門を超えた異動も有ります。ご本人の希望や適性を踏まえ慎重に行います。</div>

        <div class="item_q" id="q3">NichiRicaの社風を教えてください。</div>
        <div class="item_a"> 社員同士仲が良く、上司部下の間でも話しやすい雰囲気です。</div>

        <div class="item_q" id="q4">勤務時間を教えてください。</div>
        <div class="item_a"> 通常勤務時間は8：30〜16：50、一部フレックスタイム制を導入しています。交替職場の勤務時間は各職場によって異なります。</div>

        <div class="item_q" id="q5">残業はありますか？</div>
        <div class="item_a">ほとんどありません。 </div>
      </div>
      <div class="title">選考について</div>
<!--      <div class="section-header--line w-100">-->
<!--        <div class="line"></div>-->
<!--        <div class="line line-center"></div>-->
<!--        <div class="line"></div>-->
<!--      </div>-->
      <div class="content">
        <div class="item_q" id="6">エントリー時に資格は必要ですか?また資格は採用の条件になりますか?</div>
        <div class="item_a">選考時の採用条件になることはござません。</div>
      </div>
      <div class="title">福利厚生について</div>
<!--      <div class="section-header--line w-100">-->
<!--        <div class="line"></div>-->
<!--        <div class="line line-center"></div>-->
<!--        <div class="line"></div>-->
<!--      </div>-->
      <div class="content">
        <div class="item_q" id="q7">資格取得に関する支援制度などはありますか?</div>
        <div class="item_a"> 弊社では技術系資格取得に関する書籍代や受験費用をサポートしています。その他一部自己啓発系の資格取得サポートもしています。資格取得者には社内規定に基づいた資格手当を支給しています。</div>
        <div class="item_q" id="q8">休日、休暇について教えてください。</div>
        <div class="item_a">土日のほか、年末年始・GW・夏期休暇があります。 </div>
        <div class="item_q" id="q9">評価制度について教えてください。</div>
        <div class="item_a">
          評価のフィードバック面談を定期的に行っています。面談は、上司から評価の開示や業務に対する指導、課題解決に向けてのアドバイスを行うと共に、社員自身の悩みや不満、今後のキャリアについて話し合う場としています。個人の能力に応じて評価し、昇給・昇格・賞与に反映しています。<br>
          人事評価：社員の昇格、任命、配属、指導訓練の参考となる評価 <br>
          賞与評価：個人の成果に応じた賞与支給額を決定する評価 <br>
          業績評価：組織の業績に応じた賞与支給額に反映される評価。</div>
        <div class="item_q" id="q10">育児休暇はありますか?。</div>
        <div class="item_a">社内規程に基づき育児休暇が取得できます。 </div>
      </div>
    </div>
  </div>

<?php
get_footer();
