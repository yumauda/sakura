<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" alt="" width="1500" height="150">
        </figure>
        <h2 class="p-page-mv__title">送信完了</h2>

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
            <div class="p-contact__info">
              <p class="c-main-text">この度は弊所にお問い合わせいただき、誠にありがとうございます。<br>
                送信内容を確認後、担当者より順次ご連絡させていただきます。<br>
                今しばらくお待ちくださいますようお願いいたします。</p>
            </div>
            <div class="p-thanks__btn-wrapper">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn">
                <p class="c-btn__text">トップページ</p>
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