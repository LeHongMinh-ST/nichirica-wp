<?php
/*
Template Name: About Profile
*/

get_header();
?>
<?php get_template_part('template-parts/header/header-about') ?>
<?php get_template_part('template-parts/banners/banner1') ?>
  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about')) ?>">社長挨拶</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="about_profile size">
    <div class="section-header">
      <div class="section-header--title">会社概要</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_profile__content">
      <div class="item">
        <div class="label">社名</div>
        <div class="text-wrapper">株式会社NichiRica</div>
      </div>
      <div class="item">
        <div class="label">本社</div>
        <div class="text-wrapper">〒424-0888 <br> 静岡県静岡市清水区中之郷３−１−１</div>
      </div>
      <div class="item">
        <div class="label">TEL</div>
        <div class="text-wrapper">054-345-3411</div>
      </div>
      <div class="item">
        <div class="label">FAX</div>
        <div class="text-wrapper">054-348-0696</div>
      </div>
      <div class="item">
        <div class="label">設立</div>
        <div class="text-wrapper">1933年（昭和8年）</div>
      </div>
      <div class="item">
        <div class="label">資本金</div>
        <div class="text-wrapper">1億円</div>
      </div>
      <div class="item">
        <div class="label">代表取締役社長</div>
        <div class="text-wrapper">島 章嘉</div>
      </div>
      <div class="item">
        <div class="label">従業員数</div>
        <div class="text-wrapper">100名（令和5年3月末）</div>
      </div>
      <div class="item">
        <div class="label">事業</div>
        <div class="text-wrapper">
          1. 紙およびプラスチックスの加工並びに販売 <br>
          2. テープの自動貼付機、自動封かん機およびその付属品の販売 <br>
          3. 前項の業務に付帯する一切の事業
        </div>
      </div>
      <div class="item">
        <div class="label">取引先金融機関</div>
        <div class="text-wrapper">＜テキストが入ります＞</div>
      </div>
      <div class="item">
        <div class="label">取引先企業</div>
        <div class="text-wrapper">＜テキストが入ります＞</div>
      </div>
    </div>
  </div>
  <div class="about_profile size">
    <div class="section-header">
      <div class="section-header--title">会社沿革</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_profile__content history">
      <div class="item">
        <div class="label">1933年3月 (昭和8年）</div>
        <div class="text-wrapper">
          （株）日本理化製紙所創業（資本金175,000円） <br>
          取締役社長 井上光治 <br>
          本社：東京都牛込区新小川町 <br>
          工場：東京都足立区南鹿浜町 <br>
          パーチメント紙（硫酸紙）の製造開始
        </div>
      </div>
      <div class="item">
        <div class="label">1945年5月 （昭和20年）</div>
        <div class="text-wrapper">
          戦災により本社、工場ともに焼失 <br>
          本社仮事務所を東京都京橋区銀座8丁目9に設置
        </div>
      </div>
      <div class="item">
        <div class="label">1947年4月 （昭和22年）</div>
        <div class="text-wrapper">
          本社を(株)巴川製紙所本社ビルに移転（東京都中央区銀座）
        </div>
      </div>
      <div class="item">
        <div class="label">1947年12月 （昭和22年）</div>
        <div class="text-wrapper">
          静岡市水落に静岡工場を新設しスピーカーコーン紙の製造販売開始
        </div>
      </div>
      <div class="item">
        <div class="label">1951年6月 （昭和26年）</div>
        <div class="text-wrapper">
          合板用、包装用ガムテープの製造販売開始
        </div>
      </div>
      <div class="item">
        <div class="label">1955年9月（昭和30年）</div>
        <div class="text-wrapper">
          資本金を10,000,000に増資
        </div>
      </div>
      <div class="item">
        <div class="label">1959年6月 （昭和34年）</div>
        <div class="text-wrapper">
          清水市中之郷に草薙工場新設 <br>
          ガムテープ部門を移設
        </div>
      </div>
      <div class="item">
        <div class="label">1960年12月 （昭和35年）</div>
        <div class="text-wrapper">
          社名を日本理化製紙株式会社に改める
        </div>
      </div>
      <div class="item">
        <div class="label">1961年1月 （昭和36年）</div>
        <div class="text-wrapper">
          大阪営業所新設
        </div>
      </div>
      <div class="item">
        <div class="label">1963年3月 （昭和38年）</div>
        <div class="text-wrapper">
          本社移転（東京都中央区京橋）
        </div>
      </div>
      <div class="item">
        <div class="label">1964年8月 （昭和39年）</div>
        <div class="text-wrapper">
          静岡工場を閉鎖し草薙工場に集約
        </div>
      </div>
      <div class="item">
        <div class="label">1967年 （昭和42年）</div>
        <div class="text-wrapper">
          フートーテープ製造・販売開始
        </div>
      </div>
      <div class="item">
        <div class="label">1969年6月 （昭和44年）</div>
        <div class="text-wrapper">
          草薙工場に高速塗工マシン設置（５号機）
        </div>
      </div>
      <div class="item">
        <div class="label">1979年11月 （昭和54年）</div>
        <div class="text-wrapper">
          資本金を100,000,000に増資
        </div>
      </div>
      <div class="item">
        <div class="label">1995年4月 （平成7年）</div>
        <div class="text-wrapper">
          リカメールの製造販売開始
        </div>
      </div>
      <div class="item">
        <div class="label">2005年3月 （平成17年）</div>
        <div class="text-wrapper">
          草薙工場に精密クリーン化コーター（７号機）設置
        </div>
      </div>
      <div class="item">
        <div class="label">2007年8月 （平成19年）</div>
        <div class="text-wrapper">
          草薙工場に精密クリーン化コーター（８号機）設置
        </div>
      </div>
      <div class="item">
        <div class="label">2009年4月 （平成21年）</div>
        <div class="text-wrapper">
          東日本営業部を移転（東京都中央区日本橋小伝馬町）
        </div>
      </div>
      <div class="item">
        <div class="label">2009年6月 （平成21年）</div>
        <div class="text-wrapper">
          本社を草薙工場に移転（静岡県静岡市清水区中之郷）
        </div>
      </div>
      <div class="item">
        <div class="label">2018年11月 （平成30年）</div>
        <div class="text-wrapper">
          東日本営業本部を移転（東京都中央区京橋）
        </div>
      </div>
      <div class="item">
        <div class="label">2023年10月 （令和5年）</div>
        <div class="text-wrapper">
          日本理化製紙株式会社から株式会社NichiRicaに社名変更
        </div>
      </div>
    </div>
  </div>
  <div class="about_profile size">
    <div class="section-header">
      <div class="section-header--title">組織図</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_profile__content about_profile_diagram">
      <div class="image-diagram">
        <img src="<?= THEME_URI ?>/assets/images/diagram.png" alt="diagram" class="diagram_pc">
        <img src="<?= THEME_URI ?>/assets/images/diagram_mb.png" alt="diagram" class="diagram_mb">
      </div>
    </div>

  </div>
  <div class="about_profile size about_profile_list_of_officers">
    <div class="section-header">
      <div class="section-header--title">役員一覧</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_profile__content list_of_officers">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>役&nbsp;&nbsp;職</th>
          <th>氏&nbsp;&nbsp名</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>取締役会長</td>
          <td>井上　雄介</td>
        </tr>
        <tr>
          <td>代表取締役社長</td>
          <td>島　章嘉</td>
        </tr>
        <tr>
          <td>取締役</td>
          <td>元吉　紳一</td>
        </tr>
        <tr>
          <td>取締役</td>
          <td>渋谷　章広</td>
        </tr>
        <tr>
          <td>取締役</td>
          <td>中本　亘	</td>
        </tr>
        <tr>
          <td>取締役</td>
          <td>山本　直人</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

<?php get_template_part('template-parts/about/read-together') ?>
<?php
get_footer();
