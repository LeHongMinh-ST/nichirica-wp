<?php
/*
Template Name: Docs
*/

get_header();
?>
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
  <div class="doc press-release size">
    <div class="section-header">
      <div class="section-header--title">プレリリースの一覧</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content doc__content">
      <div class="doc__filter">
        <select name="" id="">
          <option value="">新着情報</option>
        </select>
      </div>
      <div class="doc__list press-release--list">
        <div class="press-release--item">
          <div class="date">2023.12.06</div>
          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>

          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>

          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="" class="active">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>
          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>

          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>

          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="" class="active">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>
          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
        <div class="press-release--item">
          <div class="date">2023.12.06</div>

          <div class="text-wrapper">
            <div class="icon">
              <img src="<?= THEME_URI ?>/assets/images/arrow-right-circle-fill.svg" alt="arrow-icon">
            </div>
            <a href="">投資家向けサイトにて当社が紹介されました</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
