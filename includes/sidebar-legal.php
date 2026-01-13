<?php
// 現在のページのスラッグを取得
$current_page_slug = '';
if (is_page()) {
  $current_page_slug = get_post_field('post_name', get_post());
}

// デバッグ用（削除済み）
// echo '<!-- Current Page Slug: ' . $current_page_slug . ' -->';

// メニュー項目の定義（実際のページに合わせて更新してください）
$menu_items = array(
  'inheritance' => array(
    'title' => '遺産相続',
    'items' => array(
      array('url' => home_url('/succession'), 'text' => '遺産相続', 'slug' => 'succession'),
      array('url' => home_url('/succession/belongingsafter'), 'text' => '遺産整理業務', 'slug' => 'belongingsafter'),
      array('url' => home_url('/succession/flow'), 'text' => '遺産整理業務の流れ', 'slug' => 'flow'),
      array('url' => home_url('/succession/houki'), 'text' => '相続放棄', 'slug' => 'houki'),
      // 他のページがある場合は追加
      // array('url' => home_url('/your-page'), 'text' => 'ページ名', 'slug' => 'your-page'),
    )
  ),
  'knowledge' => array(
    'title' => '相続の知識',
    'items' => array(
      array('url' => home_url('/knowledge'), 'text' => '相続の基礎知識', 'slug' => 'knowledge'),
      array('url' => home_url('/knowledge/heir'), 'text' => '相続人となる者', 'slug' => 'heir'),
      array('url' => home_url('/knowledge/souzokubun'), 'text' => '法定相続分', 'slug' => 'souzokubun'),
      array('url' => home_url('/knowledge/isanbunkatsu'), 'text' => '遺産分割', 'slug' => 'isanbunkatsu'),
      array('url' => home_url('/knowledge/necessity'), 'text' => '遺言の必要性と相続', 'slug' => 'necessity'),
      array('url' => home_url('/knowledge/tax'), 'text' => '相続税・贈与税', 'slug' => 'tax'),
      array('url' => home_url('/knowledge/tokubetu'), 'text' => '特別受益・生前贈与・寄与分', 'slug' => 'tokubetu'),
      array('url' => home_url('/knowledge/mediate'), 'text' => '調停・審判・相続人不明', 'slug' => 'mediate'),
      // 実際のページURLとスラッグを設定
      // array('url' => home_url('/knowledge-page'), 'text' => 'ページ名', 'slug' => 'knowledge-page'),
    )
  ),
  'will' => array(
    'title' => '遺言',
    'items' => array(
      array('url' => home_url('/testament'), 'text' => '遺言', 'slug' => 'testament'),
      array('url' => home_url('/testament/necessity'), 'text' => '遺言の必要性と相続', 'slug' => 'necessity'),
      array('url' => home_url('/testament/bequeath'), 'text' => '遺贈とは', 'slug' => 'bequeath'),
      array('url' => home_url('/testament/autograph'), 'text' => '自筆証書・公正証書・秘密証書遺言', 'slug' => 'autograph'),
      array('url' => home_url('/testament/executor'), 'text' => '遺言執行者', 'slug' => 'executor'),
      array('url' => home_url('/testament/white'), 'text' => '遺言書の書き方、作成の流れ', 'slug' => 'white'),
      // 実際のページURLとスラッグを設定
    )
  ),
  'realestate' => array(
    'title' => '不動産登記',
    'items' => array(
      array('url' => home_url('/registration'), 'text' => '不動産登記', 'slug' => 'registration'),
      array('url' => home_url('/registration/souzoku'), 'text' => '相続登記について', 'slug' => 'souzoku'),
      array('url' => home_url('/registration/zouyo'), 'text' => '贈与登記について', 'slug' => 'zouyo'),
      array('url' => home_url('/registration/zaisan'), 'text' => '離婚による財産分与登記', 'slug' => 'zaisan'),
      array('url' => home_url('/registration/syoyu'), 'text' => '売買による所有権移転登記', 'slug' => 'syoyu'),
      array('url' => home_url('/registration/massyou'), 'text' => '抵当権抹消登記', 'slug' => 'massyou'),
      // 実際のページURLとスラッグを設定
    )
  ),
  'guardian' => array(
    'title' => '成年後見',
    'items' => array(
      array('url' => home_url('/guardian'), 'text' => '成年後見', 'slug' => 'guardian'),
      array('url' => home_url('/guardian/meyasu'), 'text' => '成年後見制度を利用する目安', 'slug' => 'meyasu'),
      array('url' => home_url('/guardian/whats'), 'text' => '法定後見とは', 'slug' => 'whats'),
      array('url' => home_url('/guardian/flow'), 'text' => '法定後見開始までの流れ', 'slug' => 'flow'),
      array('url' => home_url('/guardian/optional'), 'text' => '任意後見とは', 'slug' => 'optional'),
      array('url' => home_url('/guardian/katsuyou'), 'text' => '任意後見の活用', 'slug' => 'katsuyou'),
      array('url' => home_url('/guardian/flow2'), 'text' => '任意後見手続きの流れ', 'slug' => 'flow2'),
      array('url' => home_url('/guardian/center'), 'text' => '成年後見センター・リーガルサポート、関連制度', 'slug' => 'center'),
      array('url' => home_url('/guardian/gokai'), 'text' => '成年後見制度に対する誤解', 'slug' => 'gokai'),
      // 実際のページURLとスラッグを設定
    )
  ),
);

// 現在のページがどのアコーディオンに含まれているかチェック
$open_accordion = '';
foreach ($menu_items as $key => $section) {
  foreach ($section['items'] as $item) {
    if (!empty($item['slug']) && $item['slug'] === $current_page_slug) {
      $open_accordion = $key;
      break 2;
    }
  }
}
?>

<!-- サイドバー（法務サポート用） -->
<aside class="p-inheritance__sidebar p-sidebar">
  <div class="p-sidebar__menu">
    <h3 class="p-sidebar__title">法務サポート</h3>
    <ul class="p-sidebar__menu-list">
      <?php foreach ($menu_items as $key => $section) :
        $is_open = ($open_accordion === $key);
      ?>
      <li class="p-sidebar__menu-item p-sidebar__menu-item--parent <?php echo $is_open ? 'is-open' : ''; ?>">
        <button class="p-sidebar__menu-toggle <?php echo $is_open ? 'is-open' : ''; ?>" type="button">
          <p class="p-sidebar__menu-toggleText"><?php echo esc_html($section['title']); ?></p>
          <span class="p-sidebar__menu-icon"></span>
        </button>
        <ul class="p-sidebar__submenu">
          <?php foreach ($section['items'] as $item) :
            $is_current = (!empty($item['slug']) && $item['slug'] === $current_page_slug);
            // デバッグ用
            if ($item['slug'] === 'flow') {
              echo '<!-- Flow Item - Slug: ' . $item['slug'] . ', Current: ' . $current_page_slug . ', Match: ' . ($is_current ? 'YES' : 'NO') . ' -->';
            }
          ?>
          <li class="p-sidebar__submenu-item <?php echo $is_current ? 'is-current' : ''; ?>">
            <a href="<?php echo esc_url($item['url']); ?>" class="p-sidebar__submenu-link <?php echo $is_current ? 'is-current' : ''; ?>">
              <?php echo esc_html($item['text']); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </li>
      <?php endforeach; ?>

      <li class="p-sidebar__menu-item">
        <a href="<?php echo esc_url(home_url('/others')); ?>" class="p-sidebar__menu-link">その他業務</a>
      </li>
      <li class="p-sidebar__menu-item">
        <a href="<?php echo esc_url(home_url('/fee')); ?>" class="p-sidebar__menu-link <?php echo ($current_page_slug === 'price') ? 'is-current' : ''; ?>">料金表</a>
      </li>
    </ul>
    <div class="p-sidebar__slider-wrapper">
      <div class="swiper slider-sidebar">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/succession')); ?>" class="p-sidebar__slide-link">
              <figure class="p-sidebar__slide-img">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_01.webp" alt="遺産整理">
              </figure>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/registration')); ?>" class="p-sidebar__slide-link">
              <figure class="p-sidebar__slide-img">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_02.webp" alt="遺産整理">
              </figure>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/knowledge')); ?>" class="p-sidebar__slide-link">
              <figure class="p-sidebar__slide-img">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_03.webp" alt="遺産整理">
              </figure>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/testament')); ?>" class="p-sidebar__slide-link">
              <figure class="p-sidebar__slide-img">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_04.webp" alt="遺産整理">
              </figure>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/guardian')); ?>" class="p-sidebar__slide-link">
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
        <a href="<?php echo esc_url(home_url('/office')); ?>" class="p-sidebar__menu-link <?php echo ($current_page_slug === 'office') ? 'is-current' : ''; ?>">事務所案内</a>
      </li>
      <li class="p-sidebar__menu-item">
        <a href="<?php echo esc_url(home_url('/judicial')); ?>" class="p-sidebar__menu-link <?php echo ($current_page_slug === 'judicial') ? 'is-current' : ''; ?>">司法書士紹介</a>
      </li>
      <li class="p-sidebar__menu-item">
        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="p-sidebar__menu-link <?php echo ($current_page_slug === 'faq') ? 'is-current' : ''; ?>">よくある質問</a>
      </li>
      <li class="p-sidebar__menu-item">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-sidebar__menu-link <?php echo (is_home() || is_singular('post')) ? 'is-current' : ''; ?>">所長ブログ</a>
      </li>
      <li class="p-sidebar__menu-item">
        <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="p-sidebar__menu-link <?php echo ($current_page_slug === 'privacy') ? 'is-current' : ''; ?>">個人情報保護方針</a>
      </li>
    </ul>
    <h3 class="p-sidebar__title mt30">アクセス</h3>
    <div class="p-sidebar__map-wrapper">
      <div class="p-sidebar__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.9032382444707!2d139.5348474757898!3d35.728598172572035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef44df5e7faf%3A0x16ba133c888bf44!2z44GV44GP44KJ5Y-45rOV5pu45aOr5LqL5YuZ5omA!5e0!3m2!1sja!2sjp!4v1765526040917!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="p-sidebar__map-detail">
        <p class="p-sidebar__map-title">さくら司法書士事務所</p>
        <p class="p-sidebar__map-text">東京都西東京市田無町5-2-17-304[<a href="https://maps.app.goo.gl/LYeEyak4zKD49ThFA" target="_blank" rel="noopener noreferrer">地図</a>]<br>田無駅北口より徒歩4分</p>
      </div>
      <ul class="p-sidebar__menu-list">
        <li class="p-sidebar__menu-item">
          <a href="/office#access" class="p-sidebar__menu-link">アクセス</a>
        </li>

      </ul>

    </div>


  </div>
</aside>
