<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" alt="" width="1500" height="150">
        </figure>
        <h2 class="p-page-mv__title">お問い合わせ</h2>

      </div>
    </div>
  </section>
  <div class="p-breadcrumbs">
    <div class="l-inner">
      <div class="p-breadcrumbs__content">
        <ul class="p-breadcrumbs__lists">
          <li class="p-breadcrumbs__list">
            <a href="#" class="p-breadcrumbs__link">
              ホーム
            </a>
          </li>
          <li class="p-breadcrumbs__list">
            <div class="p-breadcrumbs__icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 6 10"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill-rule="evenodd" fill="rgb(0, 0, 0)"
                  d="M4.873,4.999 L0.241,9.563 L0.683,9.999 L5.758,4.999 L0.683,-0.001 L0.241,0.435 L4.873,4.999 Z" />
              </svg>
            </div>
          </li>
          <li class="p-breadcrumbs__list">
            <a href="#" class="p-breadcrumbs__link">
              <?php the_title(); ?>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>



  <section class="p-inheritance">
    <div class="l-inner">
      <div class="p-inheritance__container">
        <!-- メインコンテンツ -->
        <section class="p-price">
          <div class="p-price__content">

            <h3 class="c-page-title">ご相談・お問い合わせの前に必ずお読み下さい</h3>

            <div class="p-contact__info">
              <ol class="p-contact__list">
                <li class="p-contact__item">初めてご相談いただく方は、メール相談（1回）、電話相談（1回20分まで）、面談相談（30分まで）の<span class="p-contact__text-red">何れか１つの相談を「無料」</span>にて対応させていただきます。ただし<span class="p-contact__text-bold">2回目以降の相談は、30分3,000円（税別）の有料</span>となります。</li>
                <li class="p-contact__item"><span class="p-contact__text-bold">初回無料のメール相談</span>をご希望の方は、下記「メールフォーム」をご利用ください。<br>初回無料の面談相談をご希望の方は、下記メールフォームではなく<span class="p-contact__text-red">「お電話」にてご予約</span>をお取りください。</li>
                <li class="p-contact__item">下記相談フォームの*は必須項目となっております。必須項目でない項目は未記入でも構いませんが、ご記入いただきますとより具体的なアドバイスを差し上げることができますので、ご記入をお勧めします。</li>
                <li class="p-contact__item">必須項目を設けて電話番号などをお伺いする趣旨は、誤った回答をしてしまった際の対応や、悪戯による相談等を防止するためですので、正しい情報をご記入願います。</li>
                <li class="p-contact__item">当事務所では「匿名」による相談等は受付けておらず、必須項目に不備がある場合や、お答えいただけない場合には、ご相談・お問合せには対応致しかねますので、その点ご理解願います。</li>
                <li class="p-contact__item">取扱い業務外のご相談についてはお答えできません。</li>
              </ol>

              <div class="p-contact__tel-block">
                <p class="p-contact__tel-text">初回電話の対応時間は予約制です</p>
                <p class="p-contact__tel-number">
                  <span class="p-contact__tel-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 24 24">
                      <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                        d="M11.1000,-0.000 C18.627,-0.000 23.1000,5.372 23.1000,11.1000 C23.1000,18.627 18.627,23.1000 11.1000,23.1000 C5.373,23.1000 -0.000,18.627 -0.000,11.1000 C-0.000,5.372 5.373,-0.000 11.1000,-0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                        d="M17.131,14.241 C16.453,14.241 15.788,14.136 15.158,13.927 C14.851,13.822 14.501,13.903 14.299,14.109 L13.050,15.052 C11.617,14.288 10.700,13.371 9.946,11.948 L10.864,10.729 C11.094,10.498 11.177,10.160 11.078,9.843 C10.869,9.209 10.762,8.543 10.762,7.866 C10.762,7.387 10.372,6.998 9.894,6.998 L7.867,6.998 C7.388,6.998 6.999,7.387 6.999,7.866 C6.999,13.453 11.544,17.999 17.131,17.999 C17.610,17.999 17.1000,17.609 17.1000,17.130 L17.1000,15.110 C17.1000,14.631 17.610,14.241 17.131,14.241 Z" />
                    </svg>
                  </span>
                  <a href="tel:042-469-3092" class="p-contact__tel-link">042-469-3092</a>
                </p>
              </div>
            </div>

          </div>
          <?php the_content(); ?>
        </section>

        <!-- サイドバー -->
        <aside class="p-inheritance__sidebar p-sidebar">
          <div class="p-sidebar__menu">
            <h3 class="p-sidebar__title">法務サポート</h3>
            <ul class="p-sidebar__menu-list">
              <li class="p-sidebar__menu-item p-sidebar__menu-item--parent">
                <button class="p-sidebar__menu-toggle" type="button">
                  <p class="p-sidebar__menu-toggleText">遺産相続</p>
                  <span class="p-sidebar__menu-icon"></span>
                </button>
                <ul class="p-sidebar__submenu">
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance" class="p-sidebar__submenu-link">遺産相続</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-property" class="p-sidebar__submenu-link">遺産相続財産</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-flow" class="p-sidebar__submenu-link">遺産相続財産の流れ</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#heir" class="p-sidebar__submenu-link">相続権者</a>
                  </li>
                </ul>
              </li>
              <li class="p-sidebar__menu-item p-sidebar__menu-item--parent">
                <button class="p-sidebar__menu-toggle" type="button">
                  <p class="p-sidebar__menu-toggleText">遺産の知識</p>
                  <span class="p-sidebar__menu-icon"></span>
                </button>
                <ul class="p-sidebar__submenu">
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance" class="p-sidebar__submenu-link">遺産相続</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-property" class="p-sidebar__submenu-link">遺産相続財産</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-flow" class="p-sidebar__submenu-link">遺産相続財産の流れ</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#heir" class="p-sidebar__submenu-link">相続権者</a>
                  </li>
                </ul>
              </li>
              <li class="p-sidebar__menu-item p-sidebar__menu-item--parent">
                <button class="p-sidebar__menu-toggle" type="button">
                  <p class="p-sidebar__menu-toggleText">遺言</p>
                  <span class="p-sidebar__menu-icon"></span>
                </button>
                <ul class="p-sidebar__submenu">
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance" class="p-sidebar__submenu-link">遺産相続</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-property" class="p-sidebar__submenu-link">遺産相続財産</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-flow" class="p-sidebar__submenu-link">遺産相続財産の流れ</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#heir" class="p-sidebar__submenu-link">相続権者</a>
                  </li>
                </ul>
              </li>
              <li class="p-sidebar__menu-item p-sidebar__menu-item--parent">
                <button class="p-sidebar__menu-toggle" type="button">
                  <p class="p-sidebar__menu-toggleText">不動産登記</p>
                  <span class="p-sidebar__menu-icon"></span>
                </button>
                <ul class="p-sidebar__submenu">
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance" class="p-sidebar__submenu-link">遺産相続</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-property" class="p-sidebar__submenu-link">遺産相続財産</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-flow" class="p-sidebar__submenu-link">遺産相続財産の流れ</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#heir" class="p-sidebar__submenu-link">相続権者</a>
                  </li>
                </ul>
              </li>
              <li class="p-sidebar__menu-item p-sidebar__menu-item--parent">
                <button class="p-sidebar__menu-toggle" type="button">
                  <p class="p-sidebar__menu-toggleText">成年後見</p>
                  <span class="p-sidebar__menu-icon"></span>
                </button>
                <ul class="p-sidebar__submenu">
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance" class="p-sidebar__submenu-link">遺産相続</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-property" class="p-sidebar__submenu-link">遺産相続財産</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-flow" class="p-sidebar__submenu-link">遺産相続財産の流れ</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#heir" class="p-sidebar__submenu-link">相続権者</a>
                  </li>
                </ul>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#other-contracts" class="p-sidebar__menu-link">その他業務</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#price-list" class="p-sidebar__menu-link">料金表</a>
              </li>
            </ul>
            <div class="p-sidebar__slider-wrapper">
              <div class="swiper slider-sidebar">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_01.webp" alt="遺産整理" width="180" height="180">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_02.webp" alt="遺産整理" width="180" height="180">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_03.webp" alt="遺産整理" width="180" height="180">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_04.webp" alt="遺産整理" width="180" height="180">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_05.webp" alt="遺産整理" width="180" height="180">
                      </figure>
                    </a>
                  </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
              </div>
            </div>
            <!-- Slider main container -->
            <h3 class="p-sidebar__title mt30">その他ページ</h3>
            <ul class="p-sidebar__menu-list">
              <li class="p-sidebar__menu-item">
                <a href="#other-contracts" class="p-sidebar__menu-link">事務所案内</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#price-list" class="p-sidebar__menu-link">司法書士紹介</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#price-list" class="p-sidebar__menu-link">よくある質問</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#price-list" class="p-sidebar__menu-link">所長ブログ</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#price-list" class="p-sidebar__menu-link">個人情報保護方針</a>
              </li>
            </ul>
            <h3 class="p-sidebar__title mt30">アクセス</h3>
            <div class="p-sidebar__map-wrapper">
              <div class="p-sidebar__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.9032382444707!2d139.5348474757898!3d35.728598172572035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef44df5e7faf%3A0x16ba133c888bf44!2z44GV44GP44KJ5Y-45rOV5pu45aOr5LqL5YuZ5omA!5e0!3m2!1sja!2sjp!4v1765526040917!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="p-sidebar__map-detail">
                <p class="p-sidebar__map-title">さくら司法書士事務所</p>
                <p class="p-sidebar__map-text">東京都西東京市田無町5-2-17-304[<a href="#">地図</a>]<br>田無駅北口より徒歩4分</p>
              </div>
              <ul class="p-sidebar__menu-list">
                <li class="p-sidebar__menu-item">
                  <a href="#other-contracts" class="p-sidebar__menu-link">アクセス</a>
                </li>

              </ul>

            </div>


          </div>
        </aside>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>