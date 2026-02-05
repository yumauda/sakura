<div class="p-breadcrumbs">
  <div class="l-inner">
    <div class="p-breadcrumbs__content">
      <ul class="p-breadcrumbs__lists">
        <!-- ホーム -->
        <li class="p-breadcrumbs__list">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
            ホーム
          </a>
        </li>

        <?php
        // アイコン用のSVGを変数に格納
        $breadcrumb_icon = '
          <li class="p-breadcrumbs__list">
            <div class="p-breadcrumbs__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M4.873,4.999 L0.241,9.563 L0.683,9.999 L5.758,4.999 L0.683,-0.001 L0.241,0.435 L4.873,4.999 Z" />
              </svg>
            </div>
          </li>';

        // 投稿一覧（home.php）リンク用（設定があれば「投稿ページ」を優先）
        $posts_page_id = (int) get_option('page_for_posts');
        $posts_page_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/blog');

        // 固定ページの場合
        if (is_page()) {
          $post_id = get_the_ID();
          $ancestors = array_reverse(get_post_ancestors($post_id));

          // 祖先ページがある場合、順番に表示
          if ($ancestors) {
            foreach ($ancestors as $ancestor_id) {
              echo $breadcrumb_icon;
              echo '<li class="p-breadcrumbs__list">';
              echo '<a href="' . esc_url(get_permalink($ancestor_id)) . '" class="p-breadcrumbs__link">';
              echo esc_html(get_the_title($ancestor_id));
              echo '</a>';
              echo '</li>';
            }
          }

          // 現在のページ
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url(get_permalink()) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
          echo esc_html(get_the_title());
          echo '</a>';
          echo '</li>';
        }
        // 投稿ページの場合
        elseif (is_single()) {
          // 投稿一覧
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url($posts_page_url) . '" class="p-breadcrumbs__link">';
          echo '所長のブログ';
          echo '</a>';
          echo '</li>';

          // カテゴリーを取得
          $categories = get_the_category();
          if (!empty($categories)) {
            $category = $categories[0];

            // 親カテゴリーがある場合
            if ($category->parent != 0) {
              $parent_categories = array();
              $current_cat = $category;

              // 親カテゴリーを遡って配列に格納
              while ($current_cat->parent != 0) {
                $parent_cat = get_category($current_cat->parent);
                array_unshift($parent_categories, $parent_cat);
                $current_cat = $parent_cat;
              }

              // 親カテゴリーを順番に表示
              foreach ($parent_categories as $parent_cat) {
                echo $breadcrumb_icon;
                echo '<li class="p-breadcrumbs__list">';
                echo '<a href="' . esc_url(get_category_link($parent_cat->term_id)) . '" class="p-breadcrumbs__link">';
                echo esc_html($parent_cat->name);
                echo '</a>';
                echo '</li>';
              }
            }

            // カテゴリーを表示
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="p-breadcrumbs__link">';
            echo esc_html($category->name);
            echo '</a>';
            echo '</li>';
          }

          // 現在の投稿
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url(get_permalink()) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
          echo esc_html(get_the_title());
          echo '</a>';
          echo '</li>';
        }
        // カテゴリーアーカイブページの場合
        elseif (is_category()) {
          $category = get_queried_object();

          // 投稿一覧
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url($posts_page_url) . '" class="p-breadcrumbs__link">';
          echo '所長のブログ';
          echo '</a>';
          echo '</li>';

          // 親カテゴリーがある場合
          if ($category->parent != 0) {
            $parent_categories = array();
            $current_cat = $category;

            // 親カテゴリーを遡って配列に格納
            while ($current_cat->parent != 0) {
              $parent_cat = get_category($current_cat->parent);
              array_unshift($parent_categories, $parent_cat);
              $current_cat = $parent_cat;
            }

            // 親カテゴリーを順番に表示
            foreach ($parent_categories as $parent_cat) {
              echo $breadcrumb_icon;
              echo '<li class="p-breadcrumbs__list">';
              echo '<a href="' . esc_url(get_category_link($parent_cat->term_id)) . '" class="p-breadcrumbs__link">';
              echo esc_html($parent_cat->name);
              echo '</a>';
              echo '</li>';
            }
          }

          // 現在のカテゴリー
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
          echo esc_html($category->name);
          echo '</a>';
          echo '</li>';
        }
        // 日付アーカイブページの場合
        elseif (is_date()) {
          // 投稿一覧
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url($posts_page_url) . '" class="p-breadcrumbs__link">';
          echo '所長のブログ';
          echo '</a>';
          echo '</li>';

          if (is_day()) {
            // 年
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '" class="p-breadcrumbs__link">';
            echo esc_html(get_the_time('Y年'));
            echo '</a>';
            echo '</li>';

            // 月
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '" class="p-breadcrumbs__link">';
            echo esc_html(get_the_time('m月'));
            echo '</a>';
            echo '</li>';

            // 日
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'))) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
            echo esc_html(get_the_time('d日'));
            echo '</a>';
            echo '</li>';
          } elseif (is_month()) {
            // 年
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '" class="p-breadcrumbs__link">';
            echo esc_html(get_the_time('Y年'));
            echo '</a>';
            echo '</li>';

            // 月
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
            echo esc_html(get_the_time('m月'));
            echo '</a>';
            echo '</li>';
          } elseif (is_year()) {
            // 年
            echo $breadcrumb_icon;
            echo '<li class="p-breadcrumbs__list">';
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
            echo esc_html(get_the_time('Y年'));
            echo '</a>';
            echo '</li>';
          }
        }
        // 所長のブログアーカイブページ（home.php）の場合
        elseif (is_home()) {
          echo $breadcrumb_icon;
          echo '<li class="p-breadcrumbs__list">';
          echo '<a href="' . esc_url(home_url('/blog')) . '" class="p-breadcrumbs__link p-breadcrumbs__link--current">';
          echo '所長のブログ';
          echo '</a>';
          echo '</li>';
        }
        ?>

      </ul>
    </div>
  </div>
</div>
