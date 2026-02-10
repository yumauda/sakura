<!-- サイドバー（ブログ用） -->
<aside class="p-inheritance__sidebar p-sidebar">
  <div class="p-sidebar__menu">
    <h3 class="p-sidebar__title">カテゴリー</h3>
    <ul class="p-sidebar__category-list">
      <?php
wp_list_categories(array(
  'title_li' => '',
  'show_count' => 1,
  'hierarchical' => 1,
  'depth' => 2,
  'exclude' => 1, // 「Uncategorized」カテゴリーを非表示
  'walker' => new Custom_Category_Walker()
));
?>
    </ul>

    <!-- Slider main container -->
    <h3 class="p-sidebar__title mt30">アーカイブ</h3>
    <ul class="p-sidebar__category-list">
      <?php
$archives = wp_get_archives(array(
  'type' => 'yearly',
  'show_post_count' => 1,
  'format' => 'custom',
  'before' => '<li class="p-sidebar__category-item">',
  'after' => '</li>',
  'echo' => 0
));
// リンクにカスタムクラスを追加
$archives = str_replace('<a href=', '<a class="p-sidebar__category-link" href=', $archives);
// 投稿数をリンク内に移動
$archives = preg_replace('/<\/a>&nbsp;\((\d+)\)/', ' ($1)</a>', $archives);
echo $archives;
?>
    </ul>

  </div>
</aside>