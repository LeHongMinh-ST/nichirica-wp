<?php
/*
Template Name: Entry
*/

get_header();
?>

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
  <div class="inquiry size">
    <div class="section-content inquiry__content ">
      <form action="" class="nichi-form">
        <div class="nichi-form__group">
          <div class="nichi-form__label">お名前</div>
          <div class="nichi-form__control">
            <input type="text" >
          </div>
        </div>
        <div class="nichi-form__group">
          <div class="nichi-form__label">住所</div>
          <div class="nichi-form__control">
            <input type="text" >
          </div>
        </div>
        <div class="nichi-form__group">
          <div class="nichi-form__label">生年月日</div>
          <div class="nichi-form__control">
            <input type="text" >
          </div>
        </div>
        <div class="nichi-form__group">
          <div class="nichi-form__label">電話番号 </div>
          <div class="nichi-form__control">
            <input type="text">
          </div>
        </div>
        <div class="nichi-form__group">
          <div class="nichi-form__label">メールアドレス</div>
          <div class="nichi-form__control">
            <input type="email" >
          </div>
        </div>
        <div class="nichi-form__group">
          <div class="nichi-form__label">最終学歴</div>
          <div class="nichi-form__control">
            <input type="text" >
          </div>
        </div>
        <div class="nichi-form__group align-items-start">
          <div class="nichi-form__label">職歴</div>
          <div class="nichi-form__control">
            <textarea></textarea>
          </div>
        </div>
        <div class="nichi-form__group align-items-start">
          <button class="nichi-btn" type="submit">送信</button>
        </div>
      </form>
    </div>
  </div>

<?php
get_footer();
