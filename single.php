<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" alt="" width="1500" height="150">
        </figure>
        <h2 class="p-page-mv__title">所長ブログ</h2>

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
              所長ブログ
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
          <article class="p-single">
            <div class="p-single__meta">
              <time datetime="<?php the_time('Y-m-d'); ?>" class="p-single__time"><?php the_time('Y.m.d'); ?></time>
              <p class="p-single__category">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo esc_html($categories[0]->name);
                }
                ?>
              </p>
            </div>
            <div class="p-single__header">
              <h1 class="p-single__title"><?php the_title(); ?></h1>

            </div>
            <div class="p-single__content">
              <h2>見出しh2がここに入ります</h2>
              <p>不動産（マイホームや空き家）を売却したときは、所有期間によって、税率が異なります。譲渡所得に対して、所有期間が5年以下なら約39％、5年を超えると約20％の税金がかかります。</p>
              <p>不動産（マイホームや空き家）を売却したときは、所有期間によって、税率が異なります。譲渡所得に対して、所有期間が5年以下なら約39％、5年を超えると約20％の税金がかかります。</p>
              <ul>
                <li>リストアイテム1がここに入ります</li>
                <li>リストアイテム2がここに入ります</li>
                <li>リストアイテム3がここに入ります</li>
              </ul>

              <h2>見出しh2がここに入ります</h2>
              <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>

              <h3>見出しh3がここに入ります</h3>
              <p><a href="#">リンク</a>が入ります。本文テキストが入ります。本文テキストが入ります。</p>
              <img src="<?php echo get_template_directory_uri() ?>/images/common/dummy.jpg" alt="">

              <h2>見出しh2がここに入ります</h2>
              <p>本文テキストが続きます。本文テキストが続きます。本文テキストが続きます。</p>
              <table>
                <thead>
                  <tr>
                    <th>ページタイトル</th>
                    <th>リンク</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ページタイトル</td>
                    <td><a href="#">リンク</a></td>
                  </tr>
                  <tr>
                    <td>ページタイトル</td>
                    <td><a href="#">リンク</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </article>
          <div class="p-price__btn-wrapper">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-price__btn">
              <p class="p-price__btn-text">ブログ一覧</p>
              <div class="p-price__btn-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  viewBox="0 0 12 12">
                  <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                    d="M5.683,-0.002 L4.684,0.948 L9.290,5.326 L-0.001,5.326 L-0.001,6.669 L9.290,6.669 L4.684,11.046 L5.683,11.997 L11.997,5.997 L5.683,-0.002 Z" />
                </svg>
              </div>
            </a>
          </div>
        </section>

        <!-- サイドバー -->
        <aside class="p-inheritance__sidebar p-sidebar">
          <div class="p-sidebar__menu">
            <h3 class="p-sidebar__title">カテゴリー</h3>
            <ul class="p-sidebar__category-list">
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">不動産登記 (93)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">相続、遺産分割 (211)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">遺言（遺言書）(10)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">成年後見 (122)</a></li>
              <li class="p-sidebar__category-item">
                <a class="p-sidebar__category-link" href="#">債務整理・借金問題 (247)</a>
                <ul class="children">
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">債務整理全般 (23)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">過払金返還請求 (162)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">任意整理 (14)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">個人民事再生 (34)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">自己破産・免責 (21)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">特定調停 (10)</a></li>
                </ul>
              </li>
              <li class="p-sidebar__category-item">
                <a class="p-sidebar__category-link" href="#">悪質商法、契約トラブル (71)</a>
                <ul class="children">
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">賃貸・不動産トラブル (47)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">労働・賃金トラブル (8)</a></li>
                </ul>
              </li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">裁判・訴訟 (57)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">司法書士業務全般・活動 (77)</a></li>
              <li class="p-sidebar__category-item">
                <a class="p-sidebar__category-link" href="#">日々の雑感 (112)</a>
                <ul class="children">
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">時事、話題、その他 (53)</a></li>
                  <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">趣味 (25)</a></li>
                </ul>
              </li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">info (108)</a></li>
            </ul>

            <!-- Slider main container -->
            <h3 class="p-sidebar__title mt30">アーカイブ</h3>
            <ul class="p-sidebar__category-list">
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2025 (25)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2024 (25)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2023 (25)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2022 (23)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2021 (21)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2020 (19)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2019 (17)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2018 (15)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2017 (13)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2016 (11)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2015 (9)</a></li>
              <li class="p-sidebar__category-item"><a class="p-sidebar__category-link" href="#">2014 (7)</a></li>

            </ul>

          </div>
        </aside>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>