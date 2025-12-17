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

        </ul>
      </div>
    </div>
  </div>



  <section class="p-inheritance">
    <div class="l-inner">
      <div class="p-inheritance__container">
        <!-- メインコンテンツ -->
        <section class="p-price">

          <div class="p-news">
            <?php if (have_posts()) : ?>
              <?php
              $post_count = 0;
              while (have_posts()) :
                the_post();
                $post_count++;
              ?>
                <a href="<?php the_permalink(); ?>" class="p-news__link">
                  <div class="p-news__category-wrapper">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="p-news__time"><?php the_time('Y.m.d'); ?></time>
                    <p class="p-news__category">
                      <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                      }
                      ?>
                    </p>
                  </div>
                  <div class="p-news__content">
                    <p class="p-news__title">
                      <?php the_title(); ?>
                      <?php if ($post_count === 1) : ?>
                        <span class="p-news__new">NEW</span>
                      <?php endif; ?>
                    </p>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>

          <?php
          // ページネーション設定
          $big = 999999999;

          // 左矢印SVGアイコン
          $prev_arrow_svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6px" height="10px">
            <path fill-rule="evenodd" fill="rgb(238, 129, 157)" d="M1.754,4.999 L6.005,0.859 L5.127,0.004 L-0.003,4.999 L5.127,9.994 L6.005,9.138 L1.754,4.999 Z"/>
          </svg>';

          // 右矢印SVGアイコン
          $next_arrow_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
            <path fill-rule="evenodd" fill="rgb(238, 129, 157)" d="M4.246,4.1000 L-0.005,9.139 L0.873,9.995 L6.003,4.1000 L0.873,0.005 L-0.005,0.860 L4.246,4.1000 Z"/>
          </svg>';

          $pagination = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'array',
            'prev_text' => '<span class="p-pagination__arrow p-pagination__arrow--prev">' . $prev_arrow_svg . '</span>',
            'next_text' => '<span class="p-pagination__arrow p-pagination__arrow--next">' . $next_arrow_svg . '</span>',
          ));

          if ($pagination) :
          ?>
            <nav class="p-pagination">
              <ul class="p-pagination__list">
                <?php foreach ($pagination as $page) : ?>
                  <li class="p-pagination__item"><?php echo $page; ?></li>
                <?php endforeach; ?>
              </ul>
            </nav>
          <?php endif; ?>


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