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
        <h2 class="p-page-mv__title">お問い合わせ</h2>

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

            <h3 class="c-page-title">ご相談・お問い合わせの前に必ずお読み下さい</h3>

            <div class="p-contact__info">
              <ol class="p-contact__list">
                <li class="p-contact__item">初めてご相談いただく方は、メール相談（1回）、電話相談（1回20分まで）、面談相談（30分まで）の<span class="p-contact__text-red">何れか１つの相談を「無料」</span>にて対応させていただきます。ただし<span class="p-contact__text-bold">2回目以降の相談は、30分3,000円（税別）の有料</span>となります。</li>
                <li class="p-contact__item"><span class="p-contact__text-bold">初回無料のメール相談</span>をご希望の方は、下記「メールフォーム」をご利用ください。<br>初回無料の面談相談をご希望の方は、下記メールフォームではなく<span class="p-contact__text-red">「お電話」にてご予約</span>をお取りください。</li>
                <li class="p-contact__item">下記相談フォームの*は必須項目となっております。必須項目でない項目は未記入でも構いませんが、ご記入いただきますとより具体的なアドバイスを差し上げることができますので、ご記入をお勧めします。</li>
                <li class="p-contact__item">必須項目を設けて電話番号などをお伺いする趣旨は、誤った回答をしてしまった際の対応や、悪戯による相談等を防止するためですので、正しい情報をご記入願います。</li>
                <li class="p-contact__item">当事務所では「匿名」による相談等は受付けておらず、必須項目に不備がある場合や、お答えいただけない場合には、ご相談・お問合せには対応致しかねますので、その点ご理解願います。</li>
                <li class="p-contact__item">取扱い業務外のご相談についてはお答えできません。</li>
              </ol>

              <div class="p-contact__tel-block">
                <p class="p-contact__tel-text">初回無料の面談相談のご予約は</p>
                <p class="p-contact__tel-number">
                  <span class="p-contact__tel-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 24 24">
                      <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                        d="M11.1000,-0.000 C18.627,-0.000 23.1000,5.372 23.1000,11.1000 C23.1000,18.627 18.627,23.1000 11.1000,23.1000 C5.373,23.1000 -0.000,18.627 -0.000,11.1000 C-0.000,5.372 5.373,-0.000 11.1000,-0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                        d="M17.131,14.241 C16.453,14.241 15.788,14.136 15.158,13.927 C14.851,13.822 14.501,13.903 14.299,14.109 L13.050,15.052 C11.617,14.288 10.700,13.371 9.946,11.948 L10.864,10.729 C11.094,10.498 11.177,10.160 11.078,9.843 C10.869,9.209 10.762,8.543 10.762,7.866 C10.762,7.387 10.372,6.998 9.894,6.998 L7.867,6.998 C7.388,6.998 6.999,7.387 6.999,7.866 C6.999,13.453 11.544,17.999 17.131,17.999 C17.610,17.999 17.1000,17.609 17.1000,17.130 L17.1000,15.110 C17.1000,14.631 17.610,14.241 17.131,14.241 Z" />
                    </svg>
                  </span>
                  <a href="tel:042-469-3092" class="p-contact__tel-link">042-469-3092</a>
                </p>
              </div>
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