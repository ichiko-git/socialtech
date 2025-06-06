<?php get_header(); ?>
    <main>
      <article>
        <!-- カルーセル -->
        <section id="carousel-section">
          <div class="carousel">
            <div>
              <a href="<?php echo home_url(); ?>">
                <img
                  class="carouselImg"
                  src="<?php echo get_template_directory_uri(); ?>/images/carousel1.png"
                  alt="carousel1"
                />
              </a>
            </div>
            <div>
              <a href="<?php echo home_url(); ?>/mission">
                <img
                  class="carouselImg"
                  src="<?php echo get_template_directory_uri(); ?>/images/carousel2.png"
                  alt="carousel2"
                />
              </a>
            </div>
            <div>
              <a href="<?php echo home_url(); ?>/product">
                <img
                  class="carouselImg"
                  src="<?php echo get_template_directory_uri(); ?>/images/carousel3.png"
                  alt="carousel3"
                />
              </a>
            </div>
            <div>
              <a href="<?php echo home_url(); ?>#company">
                <img
                  class="carouselImg"
                  src="<?php echo get_template_directory_uri(); ?>/images/carousel4.png"
                  alt="carousel4"
                />
              </a>
            </div>
          </div>
        </section>
        <!-- ミッション -->
        <section id="mission">
          <h2 class="index-h2">MISSION</h2>
          <div id="mission-flex">
            <div>
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/index/index-mission.png"
                alt="屋外のベンチで写真を撮影する多国籍の仲間たち"
                id="mission-photo"
              />
              <h3>世界平和の実現</h3>
              <p>
                人類の悲願である世界平和。
                世界平和を脅かす様々な社会問題を解決するためには、イノベーションをどんどん起こしていく必要があります。
                SocialTechは、プログラミング教育を通してイノベーターを輩出することで、世界平和という大きなテーマに挑んでいきます。
              </p>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/s2dgs.png" alt="S2DGs" id="s2dgs" />
              <h3>S2DGsの実現</h3>
              <p>
                国連が掲げる「Sustainable Development
                Goals（持続可能な開発目標）」に含まれる17つのグローバル目標のうち、以下の5つの目標の実現をミッションとしてサービスを展開しています。
              </p>
              <a href="<?php echo home_url(); ?>/mission"
                ><img
                  class="button-more"
                  src="<?php echo get_template_directory_uri(); ?>/images/button-more.png"
                  alt="もっとみる"
              /></a>
            </div>
          </div>
        </section>
        <!-- プロダクト -->
        <section id="product">
          <h2 class="index-h2">PRODUCT</h2>
          <div class="product-flex">
            <div id="product-left">
              <div>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/index/index-mantoman.png"
                  alt="PCでコードを書く男性"
                  class="product-photo"
                />
                <div class="product-explain">
                  <span>MAN TO MAN</span>
                  <h3>プログラミング教育</h3>
                  <p>
                    2013年より日本で唯一の専属講師によるマンツーマンのプログラミングレッスンを開始。AI/人工知能やウェブデザインの学習も可能です。
                  </p>
                </div>
              </div>
              <div>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/index/index-career.png"
                  alt="笑顔で話し合う2人の男性"
                  class="product-photo"
                />
                <div class="product-explain">
                  <span>CAREER</span>
                  <h3>人材紹介事業</h3>
                  <p>
                    エンジニアへの転職に特化した履歴書や職務経歴書のアドバイスや面接対策を行い、豊富な求人の中から最適なキャリア選択を支援します。
                  </p>
                </div>
              </div>
            </div>
            <div id="product-right">
              <div>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/index/index-media.png"
                  alt="スマートフォンを操作する人"
                  class="product-photo"
                />
                <div class="product-explain">
                  <span>MEDIA</span>
                  <h3>プログラミング学習メディア</h3>
                  <p>
                    月間200万人に読まれる日本最大級のプログラミング学習サイト「SocialTech
                    Blog」やYouTubeチャネルにて学習情報を発信しています。
                  </p>
                </div>
              </div>
              <div>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/index/index-b2b.png"
                  alt="講演中の男性とそれを聴く人々"
                  class="product-photo"
                />
                <div class="product-explain">
                  <span>B2B</span>
                  <h3>法人研修事業</h3>
                  <p>
                    社員のスキルアップ・資格取得・福利厚生を目的としたプログラミング法人研修。貴社の事業モデルに合わせた研修内容の提案を致します。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div id="product-more">
            <a href="<?php echo home_url(); ?>/product">
              <img
                class="button-more"
                src="<?php echo get_template_directory_uri(); ?>/images/button-more.png"
                alt="もっとみる"
              />
            </a>
          </div>
        </section>
        <!-- ABOUT US -->
        <section id="aboutus">
          <h2 class="index-h2">ABOUT US</h2>
          <h3>3つの組織文化</h3>
          <div>
            <table class="culture-table">
              <tr>
                <td class="culture-num">01</td>
                <th>
                  <span class="culture-en">FLEXIBLE</span><br />フレキシブル
                </th>
              </tr>
              <tr>
                <td>
                  <!-- 空のセル -->
                </td>
                <td class="culture-description">
                  リモートワーク、フルフレックス、副業推奨など1人1人が最大限のパフォーマンスを発揮できる柔軟な働き方を促進しています。
                </td>
              </tr>
              <tr>
                <td class="culture-num">02</td>
                <th><span class="culture-en">TEAL</span><br />ティール</th>
              </tr>
              <tr>
                <td>
                  <!-- 空のセル -->
                </td>
                <td class="culture-description">
                  会社全体を1つの生命体として捉え、お互いが深く結びついた一階層型
                  組織として部署・チーム関係なく課題解決をできる組織を目指しています。
                </td>
              </tr>
              <tr>
                <td class="culture-num">03</td>
                <th>
                  <span class="culture-en">SELF REALIZATION</span><br />自己実現
                </th>
              </tr>
              <tr>
                <td>
                  <!-- 空のセル -->
                </td>
                <td class="culture-description">
                  クオーター毎に経営・部署・個人ごとにOKRを設定し個人のキャリアと
                  会社の目指す方向の軌道修正を行っております。
                </td>
              </tr>
            </table>
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/index/index-aboutus1.png"
              alt="笑顔で話し合う2人の女性"
              class="culture-img"
            />
          </div>
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/index/index-aboutus2.png"
            alt="笑顔で話し合う3人の男女"
            class="culture-img2"
          />
        </section>
        <!-- VISION -->
        <section id="vision">
          <h2 class="index-h2">VISION</h2>
          <h3>7つの行動指針</h3>
          <div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-01.png" alt="01" />
              <div>
                <h4>CUSTOMER IS BOSS</h4>
                <h5>あなたのボスは顧客である</h5>
                <p>
                  私たちは常にお客様志向で行動し、お客様を喜ばせ、期待値を超えた感動を提供することを大切にします。
                </p>
              </div>
            </div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-02.png" alt="02" />
              <div>
                <h4>MOVE FAST</h4>
                <h5>早さは価値</h5>
                <p>
                  素早く試し、素早く実行することで新しい気付きや発見を見つけていきます。
                </p>
              </div>
            </div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-03.png" alt="03" />
              <div>
                <h4>IMPACT DRIVEN</h4>
                <h5>作業するのは仕事ではない</h5>
                <p>
                  問題から考え、成果とは何かを考え続け、インパクトのある成果を生むために仕事をしていきます。
                </p>
              </div>
            </div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-04.png" alt="04" />
              <div>
                <h4>SAVE TIME, SAVE MONEY</h4>
                <h5>浪費は命取りになる</h5>
                <p>
                  少ないコストでできる方法を考えます。お金だけでなく、人の時間をいただいている自覚を持ち、あらゆるリソースを有意義に活用します。
                </p>
              </div>
            </div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-05.png" alt="05" />
              <div>
                <h4>BE GENTLE</h4>
                <h5>「優しくない」をなくす</h5>
                <p>
                  社会をすこしずつ優しくしていきます。自分、家族、同僚、顧客、他人、全ての人に優しくいることを心がけます。
                </p>
              </div>
            </div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-06.png" alt="06" />
              <div>
                <h4>ABC</h4>
                <h5>当たり前の事をバカにせずにちゃんとやる</h5>
                <p>
                  礼儀、健康、嘘をつかない。当たり前の事が出来ているかを常に自問し、当たり前の基準を高く持って行動します。
                </p>
              </div>
            </div>
            <div class="vision-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/vision-07.png" alt="07" />
              <div>
                <h4>ZTI</h4>
                <h5>絶対的当事者意識</h5>
                <p>
                  役職や役割に応じた相対的な当事者意識ではなく、自身の身で起こることすべてに対する絶対的な当事者意識を持ちます。
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- 会社概要 -->
        <section id="company">
          <h2 class="index-h2">COMPANY</h2>
          <h3>会社概要</h3>
          <table id="campany-table">
            <tr>
              <th class="tableheader tableheader-first">会社名</th>
              <td class="cell cell-first">株式会社SocialTech</td>
            </tr>
            <tr>
              <th class="tableheader">所在地</th>
              <td class="cell">
                〒101-0022 東京都千代田区神田練塀町300番地
                住友不動産秋葉原駅前ビル5F<br />JR「秋葉原駅」より徒歩1分
              </td>
            </tr>
            <tr>
              <th class="tableheader">代表者</th>
              <td class="cell">代表取締役 田中 太郎</td>
            </tr>
            <tr>
              <th class="tableheader">設立</th>
              <td class="cell">2015年3月19日</td>
            </tr>
          </table>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12960.272654737351!2d139.7643743243106!3d35.699940188643595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1739606634224!5m2!1sja!2sjp"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </section>
        <!-- お問い合わせフォーム -->
        <section id="contact">
          <h2 class="index-h2">CONTACT</h2>
          <h3>お問い合わせ</h3>
          <?php echo do_shortcode('[wpforms id="22"]'); ?>
        </section>
      </article>
    </main>
<?php get_footer(); ?>