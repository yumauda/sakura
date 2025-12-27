<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" media="(min-width: 768px)" width="1500" height="150" />
            <img src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg_sp.webp" alt="" width="380" height="100">
          </picture>
        </figure>
        <h2 class="p-page-mv__title"><?php single_cat_title(); ?></h2>

      </div>
    </div>
  </section>
  <?php get_template_part('includes/breadcrumbs'); ?>



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
                      <?php
                      $post_date = get_the_date('U'); // Unixタイムスタンプで取得
                      $current_date = current_time('timestamp');
                      $days_diff = ($current_date - $post_date) / (60 * 60 * 24);
                      if ($days_diff <= 7) :
                      ?>
                        <span class="p-news__new">NEW</span>
                      <?php endif; ?>
                    </p>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php else : ?>
              <p>この カテゴリーには投稿がありません。</p>
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

        <?php get_template_part('includes/sidebar-blog'); ?>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>
