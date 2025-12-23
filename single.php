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
  <?php get_template_part('includes/breadcrumbs'); ?>



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
              <?php the_content(); ?>
              <!-- <h2>見出しh2がここに入ります</h2>
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
              </table> -->
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

        <?php get_template_part('includes/sidebar-blog'); ?>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>