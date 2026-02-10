<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy"
            src="<?php echo get_template_directory_uri()?>/images/common/page_mv_bg.webp" alt="" width="1500"
            height="150">
        </figure>
        <h2 class="p-page-mv__title">送信完了</h2>

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
              <p class="c-main-text">お問い合わせいただき、ありがとうございます。<br>
                内容を確認後、順次ご連絡させていただきますので、<br>今しばらくお待ちくださいますようお願いいたします。</p>
            </div>
            <div class="p-thanks__btn-wrapper">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn">
                <p class="c-btn__text">トップページ</p>
                <div class="c-btn__arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12"
                    height="12">
                    <path fill-rule="evenodd"
                      d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
                  </svg>
                </div>
              </a>
            </div>
          </div>

        </section>

        <?php get_template_part('includes/sidebar-legal'); ?>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer()?>