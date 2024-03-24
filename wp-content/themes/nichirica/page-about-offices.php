<?php
/*
Template Name: About Offices
*/

get_header();
?>
<?php get_template_part('template-parts/header/header-about') ?>
  <div class="breadcrumb-area size">
    <nav>
      <ul class="breadcrumb">
        <li>
          <a href="<?= get_home_url() ?>">Top</a>
        </li>
        <li>
          <a href="<?= get_permalink(get_page_by_path('about')) ?>">企業情報</a>
        </li>
        <li>
        <span class="active">
          <?php single_post_title(); ?>
        </span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="about_offices size">
    <div class="section-header">
      <div class="section-header--title">事業所・グループ企業</div>
      <div class="section-header--line">
        <div class="line"></div>
        <div class="line line-center"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="section-content about_offices__content">
      <div class="about_offices__item">
        <div class="header">
          <div class="header--title">
            国内拠点
          </div>
          <div class="header--line">
            <div class="line"></div>
            <div class="line line-center"></div>
            <div class="line"></div>
          </div>

        </div>
        <div class="content">
          <div class="offices">

            <div class="address">
              <div class="title">本社・草薙工場</div>
              <div class="address-description">
                <div class="map">
                  <a target="_blank"
                     href="https://www.google.co.jp/maps/place/%EF%BC%88%E6%A0%AA%EF%BC%89NichiRica+%E6%9C%AC%E7%A4%BE%E3%83%BB%E8%8D%89%E8%96%99%E5%B7%A5%E5%A0%B4/@35.006009,138.4387946,15.81z/data=!4m6!3m5!1s0x601a342cdb9e378f:0x5d8c73fbd4cd1c10!8m2!3d35.003735!4d138.439676!16s%2Fg%2F1tgf38bp?entry=ttu">
                    <img src="<?= THEME_URI ?>/assets/images/map-indicator.svg" alt="map"> MAP
                  </a>
                </div>
                <div class="des">
                  静岡県静岡市清水区中之郷３−１−１ <br>
                  TEL：054-345-3411 <br>
                  FAX：054-348-0696
                </div>
              </div>
            </div>
          </div>
          <div class="offices">
            <div class="address">
              <div class="title">営業本部</div>
            </div>
          </div>
          <div class="offices">
            <div class="address">
              <div class="title-small title">営業部・新規営業部</div>
              <div class="address-description small">
                <div class="map">
                  <a target="_blank"
                     href="https://www.google.com/maps/place/Kyobashi+Trust+Tower,+2-ch%C5%8Dme-1-3+Ky%C5%8Dbashi,+Chuo+City,+Tokyo+104-0031,+Nh%E1%BA%ADt+B%E1%BA%A3n/@35.6778136,139.7675397,17z/data=!3m1!4b1!4m6!3m5!1s0x60188be326173591:0xca511b3c7f15b519!8m2!3d35.6778093!4d139.77012!16s%2Fg%2F11c71mmkjc?entry=ttu">
                    <img src="<?= THEME_URI ?>/assets/images/map-indicator.svg" alt="map"> MAP
                  </a>
                </div>
                <div class="des">
                  東京都中央区京橋2-1-3 <br>
                  京橋トラストタワー7階 <br>
                  TEL: 03-3517-3070 <br>
                  FAX: 03-3517-3071
                </div>
              </div>
            </div>
          </div>
          <div class="offices">
            <div class="address">
              <div class="title-small title">大阪営業所</div>
              <div class="address-description small">
                <div class="map">
                  <a target="_blank"
                     href="https://www.google.com/maps/place/1-ch%C5%8Dme-3-23+Momodani,+Ikuno+Ward,+Osaka,+544-0034,+Nh%E1%BA%ADt+B%E1%BA%A3n/@34.6597481,135.5263759,17z/data=!3m1!4b1!4m6!3m5!1s0x6000de0190e88fad:0x53446becbe03e4ca!8m2!3d34.6597437!4d135.5289562!16s%2Fg%2F11c4rmjnns?entry=ttu">
                    <img src="<?= THEME_URI ?>/assets/images/map-indicator.svg" alt="map"> MAP
                  </a>
                </div>
                <div class="des">
                  大阪府大阪市生野区桃谷1-3-23 <br>
                  TEL: 06-6711-5061 <br>
                  FAX: 06-6711-5062 <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about_offices__item">
        <div class="header">
          <div class="header--title">
            グループ企業
          </div>
          <div class="header--line">
            <div class="line"></div>
            <div class="line line-center"></div>
            <div class="line"></div>
          </div>
        </div>
        <div class="content">
          <div class="sub-header">
            株式会社巴川コーポレーション
          </div>
          <div class="link">
            <a href="https://www.tomoegawa.co.jp/" target="_blank"><img src="<?= THEME_URI ?>/assets/images/link-icon.png" alt="">https://www.tomoegawa.co.jp/</a>
          </div>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                住所
              </div>
              <div class="des">
                〒104-8335 <br>東京都中央区京橋二丁目1番3号<br>京橋トラストタワー 7階
              </div>
            </div>
            <div class="sub-item">
              <div class="title">
                TEL
              </div>
              <div class="des">
                03-3516-3401
              </div>
            </div>
            <div class="sub-item">
              <div class="title">
                FAX
              </div>
              <div class="des">
                03-3516-3391
              </div>
            </div>
            <div class="sub-item">
              <div class="title">
                事業内容
              </div>
              <div class="des">
                <ul>
                  <li>紙、不織布およびパルプならびにこれらと他の材料との複合物の製造、加工、輸出入販売</li>
                  <li>プラスチックスおよびこれと他の材料の複合物の製造、加工、輸出入ならびに販売</li>
                  <li>電子写真用現像剤、複写、印刷、記録用材料の 製造、加工、輸出入ならびに販売</li>
                  <li>電子機器用部分品、電磁機器用部分品、通信機器用部分品および電池用部分品の製造、加工、
                    輸出入ならびに販売
                  </li>
                  <li>磁気記録カード・テープおよび集積回路内蔵 情報記録カード等の製造、加工、輸出入ならびに販売</li>
                  <li>磁気記録カード・テープおよび集積回路内蔵 情報記録カード等の製造、加工、輸出入ならびに販売</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="sub-header">
            三和紙工株式会社
          </div>
          <p>［事業内容］　重包装紙袋、コンテナ、各種包装資材等の製造・加工・販売、特殊紙・機能紙の販売</p>
          <div class="link">
            <a href="http://www.sanwa-shiko.co.jp/" target="_blank"><img src="<?= THEME_URI ?>/assets/images/link-icon.png" alt="">http://www.sanwa-shiko.co.jp/</a>
          </div>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                〒104-0031<br>東京都中央区京橋二丁目1番3号<br>京橋トラストタワー 7階<br>TEL：03-3517-2070<br>FAX：03-3517-2074
              </div>
            </div>
          </div>
          <hr>
          <div class="sub-header">
            新巴川加工株式会社
          </div>
          <p>［事業内容］　製紙、機能性シート、半導体・ディスプレイ、トナー等の加工・包装</p>

          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                〒421-0126<br>静岡県静岡市駿河区用宗巴町3-1<br>TEL：054-259-4153<br>FAX：054-257-5758
              </div>
            </div>
          </div>
          <hr>
          <div class="sub-header">
            巴川物流サービス株式会社
          </div>
          <p>［事業内容］　貨物自動車運送業および倉庫業</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                〒421-0126<br>静岡県静岡市駿河区用宗巴町3-1<br>TEL：054-259-4155<br>FAX：054-257-5756
              </div>
            </div>
          </div>
          <hr>
          <div class="sub-header">
            昌栄印刷株式会社
          </div>
          <p>［事業内容］　有価証券・カード・帳票・磁気記録関連製品等の製造・加工・販売および情報処理関連事業</p>
          <div class="link">
            <a href="http://www.shoei-printing.com/" target="_blank"><img src="<?= THEME_URI ?>/assets/images/link-icon.png" alt="">http://www.shoei-printing.com/</a>
          </div>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                〒544-0034<br>大阪府大阪市生野区桃谷1-3-23<br>TEL：06-6717-1181<br>FAX：06-6712-0101
              </div>
            </div>
          </div>
          <hr>
          <div class="sub-header">
            株式会社トッパンTOMOEGAWAオプティカルフィルム
          </div>
          <p>［事業内容］　反射防止フィルム、機能性フィルム、合成樹脂の開発、製造、販売</p>

          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                〒110-0016<br>東京都台東区台東1-5-1
              </div>
            </div>
          </div>
          <hr>


        </div>
      </div>
      <div class="about_offices__item">
        <div class="header">
          <div class="header--title">
            グループ企業（国外）
          </div>
          <div class="header--line">
            <div class="line"></div>
            <div class="line line-center"></div>
            <div class="line"></div>
          </div>
        </div>
        <div class="content">
          <div class="sub-header">
            TOMOEGAWA(U.S.A.) INC.
          </div>
          <p>［事業内容］　TOMOEGAWAグループ製品の米国及び周辺地域への販売</p>
          <div class="link">
            <a href="http://www.tomoegawa.com/" target="_blank"><img src="<?= THEME_URI ?>/assets/images/link-icon.png" alt="">http://www.tomoegawa.com/</a>
          </div>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                1101 Perimeter Drive, Suite 610, Schaumburg, IL 60173 U.S.A.<br>TEL：+1-847-541-3001<br>FAX：+1-847-807-8704
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            TOMOEGAWA EUROPE B.V.
          </div>
          <p>［事業内容］　TOMOEGAWAグループ製品の欧州及び周辺地域への販売</p>
          <div class="link">
            <a href="https://www.tomoegawa.nl/" target="_blank"><img src="<?= THEME_URI ?>/assets/images/link-icon.png" alt="">https://www.tomoegawa.nl/</a>
          </div>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                Prof. <br>J.H. Bavincklaan 2, 1183 AT Amstelveen, The Netherlands<br>TEL：+31-20-6621011<br>FAX：+31-20-6628668
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            TOMOEGAWA HONG KONG CO.,LTD
          </div>
          <p>［事業内容］　TOMOEGAWAグループ製品の中国及び周辺地域への販売</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                Unit 1213, 12/F, Tower Ⅱ, Cheung Sha Wan Plaza, 833 Cheung Sha Wan Road, Kowloon, Hong Kong<br>TEL：+852-3549-6722<br>FAX：+852-3549-6721
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            巴川影像科技（恵州）有限公司
          </div>
          <p>［事業内容］　複写機・プリンター用トナー等の製造・販売</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                No.1 Songbai Road Huinan Hi-Tech Industrial Park, Huiao Highway, Huizhou, Guangdong, 516025 China<br>TEL：+86-752-2598801<br>FAX：+86-752-2598800
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            日彩影像科技（九江）有限公司
          </div>
          <p>［事業内容］　複写機・プリンター用トナー等の製造・販売</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                Building No.7,Electronics Supporting Sector Automobile Industrial Park Jiujiang Economic＆Technological
                Development Zone,Jiujiang,Jiangxi-Province,　332000　P.R.C<br>TEL：+86-792-8276688
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            巴川コリア株式会社
          </div>
          <p>［事業内容］　半導体・ディスプレイ関連製品の韓国電子部品材料の韓国及び周辺地域への販売</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                Illumistate 417-1904,180, Beoman-ro, Bucheon-si, Gyeonggi-do, Republic of
                Korea<br>TEL：+82-10-9083-4180<br>FAX：+82-0504-022-4180
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            TOMOEGAWA Aura India Pvt. Ltd.
          </div>
          <p>［事業内容］　絶縁紙の製造・販売</p>
          <div class="link">
            <a href="http://tomoegawaindia.com/company" target="_blank"><img src="<?= THEME_URI ?>/assets/images/link-icon.png" alt="">http://tomoegawaindia.com/company</a>
          </div>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                6-3-648/1&2, 1st Floor, Off Rajbhavan Rd, Somajiguda,Hyderabad, Telangana, India 500082<br>TEL：+91-40-30617873
              </div>
            </div>
          </div>
          <hr>

          <div class="sub-header">
            台湾巴川股份有限公司
          </div>
          <p>［事業内容］　半導体・ディスプレイ関連製品の台湾電子部品材料の台湾及び周辺地域への販売</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">
                〒80044<br>高雄市新興區中山二路472號14F-B室 啟安大廈<br>TEL：+886-7-281-1330<br>FAX：+886-7-281-1660
              </div>
            </div>
          </div>
          <hr>


          <div class="sub-header">
            巴川（広州）国際貿易有限公司
          </div>
          <p>［事業内容］　TOMOEGAWAグループ製品の中国での販売</p>
          <div class=sub-list>
            <div class="sub-item">
              <div class="title">
                本社
              </div>
              <div class="des">Room 2001-02, Goldlion Digital Network Center, 136-138 Tiyu East Road, Guangzhou,
                P.R.C.<br>TEL：+86-20-3888-9120<br>FAX：+86-20-3888-9133
              </div>
            </div>
          </div>
          <hr>

        </div>
      </div>
    </div>
  </div>

<?php get_template_part('template-parts/about/read-together') ?>
<?php
get_footer();
