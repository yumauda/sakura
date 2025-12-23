<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/scroll-hint.css">
<main>
  <div class="p-mv">
    <div class="l-inner">
      <div class="p-mv__content">
        
        <div class="swiper slider-main">
          
          <div class="swiper-wrapper slider__items">
            <div class="swiper-slide">
              <a href="#" class="p-mv__slide__link">
                <figure class="p-mv__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_01.webp" alt="遺産整理（遺産相続）・相続手続きでお困りの方" width="580" height="400">
                </figure>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="p-mv__slide__link">
                <figure class="p-mv__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_02.webp" alt="相続登記や不動産の購入・生前贈与をお考えの方" width="580" height="400">
                </figure>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="p-mv__slide__link">
                <figure class="p-mv__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_03.webp" alt="法定相続分など相続の基本的な知識を知りたい方" width="580" height="400">
                </figure>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="p-mv__slide__link">
                <figure class="p-mv__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_04.webp" alt="残された家族へ遺言書の作成を考えている方" width="580" height="400">
                </figure>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="p-mv__slide__link">
                <figure class="p-mv__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_05.webp" alt="どなたかに後見をしてもらいたいと考えている方" width="580" height="400">
                </figure>
              </a>
            </div>


          </div>
          <div class="swiper-pagination"></div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
      </div>
    </div>
  </div>
  <section class="p-about">
    <div class="l-inner">
      <div class="p-about__content">
        <div class="p-about__row">
          <div class="p-about__left">
            <p class="c-sub-title">私たちについて</p>
            <div class="p-about__title">
              <h2 class="c-main-title">皆さまの<span>身近な存在</span>でありたい。<br>相続や遺産整理は私たちにお任せください。</h2>
            </div>
            <div class="p-about__text">
              <p class="c-main-text">相続に関する手続きは、相続放棄や遺言書の検認、預貯金口座や不動産の名義変更、年金手続き、保険金の請求など多岐に亘りとても複雑で面倒です。<br class="u-desktop">
                そんな相続手続きを、私たち「さくら司法書士事務所」が親身になってサポートいたします。</p>
              <p class="c-main-text">さくら司法書士事務所は、2005年4月に東京都西東京市で開業して以来、地元である西東京市（田無・ひばりが丘・保谷）、小平市（花小金井）をはじめとした近隣地域の皆様から多くのご依頼をいただき、豊富な経験と実績を有しています。</p>
            </div>
          </div>
          <figure class="p-about__people">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/people.png" alt="私たちについて" width="431" height="388">
          </figure>
        </div>
        <div class="p-about__block">
          <div class="p-about__block-left">
            <p class="c-sub-title">サービスエリア</p>
            <div class="p-about__text">
              <p class="c-main-text">さくら司法書士事務所は、西東京市田無（ひばりが丘、保谷）を拠点に、小平市（花小金井）、清瀬市、東村山市、東久留米市などの三多摩地域、練馬区、武蔵野市、埼玉県新座市、所沢市などにて、遺産相続や不動産登記などのお手伝いをしています。それ以外の地域の方でも一度ご相談ください。</p>
            </div>
            <div class="p-about__white">
              <div class="p-about__white-detail">
                <p class="p-about__white-title">さくら司法書士事務所</p>
                <div class="p-about__white-text">
                  <p class="c-main-text">〒188-0011 <br class="u-mobile">東京都西東京市田無町5-2-17-304</p>
                </div>
              </div>
              <div class="p-about__mapBtn-wrapper">
                <a href="https://maps.app.goo.gl/LYeEyak4zKD49ThFA" class="p-about__mapBtn" target="_blank" rel="noopener noreferrer">アクセスマップ</a>
              </div>
            </div>
          </div>
          <figure class="p-about__map">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/map.webp" alt="さくら司法書士事務所の位置">
          </figure>
        </div>
        <div class="p-about__btn-wrapper">
          <a href="<?php echo esc_url(home_url('/office')); ?>" class="c-btn">
            <p class="c-btn__text">事務所案内</p>
            <div class="c-btn__arrow">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="12" height="12">
                <path fill-rule="evenodd"
                  d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
              </svg>
            </div>
          </a>
          <a href="<?php echo esc_url(home_url('/introduce')); ?>" class="c-btn">
            <p class="c-btn__text">司法書士紹介</p>
            <div class="c-btn__arrow">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="12" height="12">
                <path fill-rule="evenodd"
                  d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="p-support">
    <div class="l-inner">
      <div class="p-support__content">
        <p class="c-sub-title">法務サポート</p>
        <div class="p-support__title">
          <h2 class="c-main-title">登記や相続など、皆さまの<span>暮らしを支える法的サポート</span>をご提供しております。</h2>
        </div>
        <div class="p-support__text">
          <p class="c-main-text">当事務所が対応できるサポートや情報は以下の通りです。遺産相続、遺言書作成、不動産登記、成年後見など、皆さまの暮らしや事業に関わる法的手続きを幅広くサポートいたします。開業以来の長い専門知識と経験を活かし、安心と信頼のサービスを提供しております。</p>
        </div>
        <ul class="p-support__grid">
          <li class="p-support__grid-item">
            <figure class="p-support__grid-itemImg">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/support_1.webp" alt="遺産相続" width="180" height="170">
            </figure>
          </li>
          <li class="p-support__grid-item">
            <figure class="p-support__grid-itemImg">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/support_2.webp" alt="相続の知識" width="180" height="170">
            </figure>
          </li>
          <li class="p-support__grid-item">
            <figure class="p-support__grid-itemImg">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/support_3.webp" alt="遺言" width="180" height="170">
            </figure>
          </li>
          <li class="p-support__grid-item">
            <figure class="p-support__grid-itemImg">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/support_4.webp" alt="不動産登記" width="180" height="170">
            </figure>
          </li>
          <li class="p-support__grid-item">
            <figure class="p-support__grid-itemImg">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/support_5.webp" alt="成年後見" width="180" height="170">
            </figure>
          </li>
          <li class="p-support__grid-item">
            <figure class="p-support__grid-itemImg">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/support_6.webp" alt="その他" width="180" height="170">
            </figure>
          </li>

        </ul>

      </div>
    </div>
  </section>

  <section class="p-service">
    <div class="l-inner">
      <div class="p-service__content">
        <div class="p-service__textArea">
          <p class="c-sub-title">遺産相続</p>
          <div class="p-service__title">
            <h2 class="c-main-title">遺産相続や遺産整理に関するご相談を<br class="u-desktop"><span>初回無料</span>でお受けしております。</h2>
          </div>

          <div class="p-service__text">
            <p class="c-main-text">相続に関する手続きは、一生のうちに何度もある手続きではありません。<br>
              しかし、相続手続きや申請は、「遺産分割」や「銀行預貯金の解約や証券会社における諸手続き、保険金請求等の遺産整理」「相続登記（不動産の名義変更）」「遺言」「相続放棄」「相続税の申告」など、非常に複雑で難しいのが現状です。</p>
            <p class="c-main-text">相続に関する問題は各家庭ごとに異なるため、同じ内容の相続などなく、また、相続に関する悩みは、なかなか友人や知人にも相談できないデリケートな問題です。</p>
            <p class="c-main-text">そして、相続は多くの方が人生で一番大きな財産を取得することになる出来事になりますので、間違いのない、適切な対応が必要となります。</p>
          </div>

        </div>
        <div class="p-service__imageArea">
          <figure class="p-service__image">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/service_illustration.webp" alt="司法書士による相談業務" width="400" height="300">
          </figure>
        </div>

      </div>
      <div class="p-service__text">
        <p class="c-main-text">当事務所では、徹底した秘密厳守と、司法書士及び専従スタッフによる親身な対応により、スムーズかつ的確な手続きをサポートさせていただきます。相続や遺産整理の問題でお悩みの方に司法書士との<span>相談を初回無料</span>でお受けしておりますので、まずは無料相談で相続に関する疑問点、不安点などを解消して下さい。</p>
      </div>
      <div class="p-service__btn">
        <a href="<?php echo esc_url(home_url('/inheritance')); ?>" class="c-btn">
          <p class="c-btn__text">遺産相続</p>
          <div class="c-btn__arrow">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="12" height="12">
              <path fill-rule="evenodd"
                d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
            </svg>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="p-service">
    <div class="l-inner">
      <div class="p-service__content">
        <div class="p-service__textArea">
          <p class="c-sub-title">不動産登記</p>
          <div class="p-service__title">
            <h2 class="c-main-title">家・土地・マンションなどの不動産登記に関して<span>豊富な経験と実績</span>を有しています。</h2>
          </div>

          <div class="p-service__text">
            <p class="c-main-text">不動産登記は、家、土地、マンションなどの不動産を購入したときのほか、相続、遺贈、生前贈与、財産分与などの際にも行います。また、住宅ローンを完済したときには抵当権抹消登記が必要です。</p>
            <p class="c-main-text">さくら司法書士事務所は、2005年4月に東京都西東京市で開業して以来、不動産登記に関する豊富な経験と実績を有しています。</p>
            <p class="c-main-text">土地や建物、マンションなどの不動産登記手続きのことなら、些細なことでも結構ですので、お気軽にお問い合わせください。</p>
          </div>

        </div>
        <div class="p-service__imageArea">
          <figure class="p-service__image">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/service_illustration2.webp" alt="司法書士による相談業務" width="400" height="300">
          </figure>
        </div>

      </div>

      <div class="p-service__btn">
        <a href="#" class="c-btn">
          <p class="c-btn__text">不動産登記</p>
          <div class="c-btn__arrow">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="12" height="12">
              <path fill-rule="evenodd"
                d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
            </svg>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        <div class="p-top-news__left">
          <div class="p-top-news__title-wrapper">
            <p class="c-sub-title">所長ブログ</p>
            <h2 class="p-top-news__title">更新内容</h2>
          </div>
          <div class="p-top-news__btn">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="c-btn">
              <p class="c-btn__text">ブログ一覧</p>
              <div class="c-btn__arrow">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="12" height="12">
                  <path fill-rule="evenodd"
                    d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="p-top-news__right">
          <?php
          $args = array(
            'posts_per_page' => 4,
            'post_status' => 'publish',
            'post_type' => 'post',
            'orderby' => 'date',
          );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) :
            while ($my_query->have_posts()) : $my_query->the_post();
          ?>

              <a href="<?php the_permalink(); ?>" class="p-top-news__link">
                <div class="p-top-news__category">
                  <time datetime="<?php the_time('Y-m-d'); ?>" class="p-top-news__time"><?php the_time('Y.m.d'); ?></time>
                  <p class="p-top-news__category-text">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                      echo esc_html($categories[0]->name);
                    }
                    ?>
                  </p>
                </div>
                <p class="p-top-news__link-title"><?php the_title(); ?></p>
              </a>

          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </div>
        <div class="p-top-news__btn p-top-news__btn-mobile">
          <a href="#" class="c-btn">
            <p class="c-btn__text">ブログ一覧</p>
            <div class="c-btn__arrow">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="12" height="12">
                <path fill-rule="evenodd"
                  d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="p-flow">
    <div class="l-inner">
      <div class="p-flow__content">
        <div class="p-flow__title">
          <p class="c-sub-title">ご相談の流れ</p>
          <div class="p-flow__mainTitle">
            <h2 class="c-main-title">お気軽にご相談いただくために、<span>初回ご相談無料</span>にて対応させていただきます。</h2>
          </div>
        </div>
        <div class="p-flow__topText">
          <p class="c-main-text">お問い合わせをいただいてから、現状のヒアリング、ご提案、お見積り、ご契約、そして実施までの一連の流れは以下の通りです。<br>
            お客様のご要望を丁寧にお伺いし、最適なプランをご提案することで、安心してご相談いただけるようサポートいたします。</p>
        </div>
        <div class="p-flow__lists-scroll">

          <ul class="p-flow__lists">
            <li class="p-flow__list" data-number="1">
              <figure class="p-flow__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_1.png" alt="お問い合わせ" width="90" height="86">
              </figure>
              <p class="p-flow__list-title">お問い合わせ</p>
              <p class="p-flow__list-text">まずはお電話かメールフォームにてお問い合わせください。その際に簡単なご相談内容をご記入いただくとスムーズです。</p>
            </li>
            <li class="p-flow__list" data-number="2">
              <figure class="p-flow__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_2.png" alt="初回ご相談無料" width="90" height="86">
              </figure>
              <p class="p-flow__list-title">初回ご相談無料</p>
              <p class="p-flow__list-text">メール相談（1回）、電話相談（1回20分まで）、面談相談（30分まで）のいずれかを<span>初回無料</span>にて対応させていただきます。</p>
            </li>
            <li class="p-flow__list" data-number="3">
              <figure class="p-flow__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_3.png" alt="お問い合わせ" width="90" height="86">
              </figure>
              <p class="p-flow__list-title">解決案の提案</p>
              <p class="p-flow__list-text">ご相談いただいた内容を踏まえて最善のご提案とお見積りを提示させていただきます。<span>お見積りは無料</span>です。</p>
            </li>
            <li class="p-flow__list" data-number="4">
              <figure class="p-flow__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_4.png" alt="お問い合わせ" width="90" height="86">
              </figure>
              <p class="p-flow__list-title">契約とサポート開始</p>
              <p class="p-flow__list-text">サポート内容にご納得いただけましたら正式な契約を行った上で、サポートを開始させて頂きます。</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="p-link">
    <div class="l-inner">
      <div class="p-link__content">
        <div class="p-link__title-wrapper">
          <p class="c-sub-title">関連リンク</p>
          <h2 class="p-link__title">運営ブログ</h2>
        </div>
        <ul class="p-link__cards">
          <li class="p-link__card">
            <a href="https://www.shihou.cc/blog/" class="p-link__link" target="_blank" rel="noopener noreferrer">
              <figure class="p-link__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/link_1.png" alt="所長ブログ" width="60" height="60">
              </figure>
              <div class="p-link__detail">
                <p class="p-link__detail-small">さくら司法書士事務所</p>
                <p class="p-link__detail-title">所長ブログ</p>
              </div>
            </a>
          </li>
          <li class="p-link__card">
            <a href="https://kouken110.com/" class="p-link__link" target="_blank" rel="noopener noreferrer">
              <figure class="p-link__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/link_2.png" alt="成年後見と任意後見" width="60" height="60">
              </figure>
              <div class="p-link__detail">
                <p class="p-link__detail-small">教えて！</p>
                <p class="p-link__detail-title">成年後見と任意後見</p>
              </div>
            </a>
          </li>
          <li class="p-link__card">
            <a href="https://touki-souzoku.com/" class="p-link__link" target="_blank" rel="noopener noreferrer">
              <figure class="p-link__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/link_3.png" alt="相続登記相談ガイド" width="60" height="60">
              </figure>
              <div class="p-link__detail">
                <p class="p-link__detail-small">西東京市・小平市</p>
                <p class="p-link__detail-title">相続登記相談ガイド</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- <?php the_content(); ?> -->
  <?php get_template_part('includes/contact'); ?>

</main>
<script src="<?php echo get_template_directory_uri(); ?>/js/scroll-hint.min.js"></script>
<script>
  if (window.innerWidth <= 768) {
    window.addEventListener('DOMContentLoaded', function() {
      new ScrollHint('.p-flow__lists-scroll', {
        suggestiveShadow: true,
        i18n: {
          scrollable: "スクロールできます"
        }
      });
    });
  }
</script>
<?php get_footer() ?>