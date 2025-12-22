<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" alt="" width="1500" height="150">
        </figure>
        <h2 class="p-page-mv__title">司法書士紹介</h2>

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
            <h3 class="c-page-title">代表司法書士</h3>
            <figure class="p-price__profile">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/profile.jpg" alt="代表司法書士" width="200" height="200">
            </figure>
            <div class="p-price__block">
              <table class="p-price__table p-price__table--half">
                <tbody>
                  <tr>
                    <td>氏名</td>
                    <td>志村 理（しむら おさむ）</td>
                  </tr>
                  <tr>
                    <td>資格</td>
                    <td class="border-bottom-none">
                      <ul class="p-price__list">
                        <li class="p-price__list-item">
                          司法書士登録番号 東京第3974号
                        </li>
                        <li class="p-price__list-item">
                          簡裁訴訟代理認定番号 第501103号
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <div class="p-price__content">
            <h3 class="c-page-title">主な会務・役歴</h3>
           
            <div class="p-price__block">
              <dl class="p-price__dl">
                <div class="p-price__dlRow">
                  <dt class="p-price__dt">2023～2024年</dt>
                  <dd class="p-price__dd">
                    <p class="p-price__dd-text">東京司法書士会 田無支部 支部長</p>
                    <p class="p-price__dd-text">清瀬市 きよせ権利擁護センター 事例検討委員会 委員</p>
                  </dd>
                </div>
                <div class="p-price__dlRow">
                  <dt class="p-price__dt">2020～2022年</dt>
                  <dd class="p-price__dd">
                    <p class="p-price__dd-text">清瀬市 きよせ権利擁護センター 事例検討委員会 委員</p>
                    <p class="p-price__dd-text">清瀬市 きよせ権利擁護センター 運営委員会 委員</p>
                    <p class="p-price__dd-text">清瀬市 きよせ権利擁護センター 法人後見準備支援検討会 委員</p>
                  </dd>
                </div>
              </dl>
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
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_01.webp" alt="遺産整理">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_02.webp" alt="遺産整理">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_03.webp" alt="遺産整理">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_04.webp" alt="遺産整理">
                      </figure>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" class="p-sidebar__slide-link">
                      <figure class="p-sidebar__slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_05.webp" alt="遺産整理">
                      </figure>
                    </a>
                  </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

 
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