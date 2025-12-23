<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" alt="" width="1500" height="150">
        </figure>
        <h2 class="p-page-mv__title">送信確認</h2>

      </div>
    </div>
  </section>
  <?php get_template_part('includes/breadcrumbs'); ?>



  <section class="p-inheritance">
    <div class="l-inner">
      <div class="p-inheritance__container">
        <!-- メインコンテンツ -->
        <section class="p-price">
          <div class="p-price__content">
            <div class="p-contact__info">
             <p class="c-main-text">以下の内容でよろしければ、送信をお願いいたします。</p>
            </div>
          </div>
          <?php the_content(); ?>
        </section>

        <?php get_template_part('includes/sidebar-legal'); ?>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>