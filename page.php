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
        <h2 class="p-page-mv__title"><?php the_title(); ?></h2>

      </div>
    </div>
  </section>
  <?php get_template_part('includes/breadcrumbs'); ?>

  <section class="p-inheritance">
    <div class="l-inner">
      <div class="p-inheritance__container">
        <!-- メインコンテンツ -->
        <!-- <div class="p-inheritance__main">
          <div class="p-inheritance__content">
            <div class="p-inheritance__detail">
              <h3 class="c-page-title">遺産相続について</h3>
              <div class="p-inheritance__text-wrapper">
                <p class="p-inheritance__text">
                  <span class="p-inheritance__text--bold">人が死亡すると、その人が持っていた財産や権利、義務などは、特定の人に引き継がれることになり、これを</span><span class="p-inheritance__text--attention">「相続」</span>と言います。<span class="p-inheritance__text--bold">相続では、この亡くなった人を</span><span class="p-inheritance__text--attention">「被相続人」</span>、<span class="p-inheritance__text--bold">財産を引き継ぐ人を</span><span class="p-inheritance__text--attention">「相続人」</span>といいます。
                </p>
                <p class="p-inheritance__text">
                  相続で引き継がれる財産には、「現金」や「預貯金」、「不動産」など様々なものがありますが、<span class="p-inheritance__text--bold">相続で引き継がれる財産のことを</span><span class="p-inheritance__text--attention">「遺産」</span>と言います。
                </p>
              </div>
            </div>

            <figure class="p-inheritance__illustration">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/inheritance_illustration.jpg" alt="遺産相続のイラスト" width="390" height="260">
            </figure>
          </div>
          <div class="p-inheritance__example">
            <h4 class="c-page-title--h4">遺産の例</h4>
            <div class="p-inheritance__example-box">
              <ol class="p-inheritance__example-list p-inheritance__example-list--left">
                <li class="p-inheritance__example-item">現金や預貯金</li>
                <li class="p-inheritance__example-item">土地や建物、マンション、別荘などの不動産</li>
                <li class="p-inheritance__example-item">株式（有価証券）や投資信託</li>
                <li class="p-inheritance__example-item">自動車や貴金属、絵画などの動産</li>
                <li class="p-inheritance__example-item">賃借権・特許権・著作権などの権利</li>
                <li class="p-inheritance__example-item">借入金や未払い金などの債務</li>
              </ol>
            </div>
            <div class="p-inheritance__attention-text">
              <p class="p-inheritance__text">このように、<span class="p-inheritance__text--bold">亡くなった人の残した財産を特定の人が引き継ぐ（もらう）ことを</span><span class="p-inheritance__text--attention">「遺産相続」</span>と言います。</p>
            </div>
          </div>
          <div class="p-inheritance__section mt87">
            <h3 class="c-page-title">遺産の相続方法</h3>
            <div class="p-inheritance__text-wrapper">
              <p class="p-inheritance__text">遺産相続の方法としては、主に次のような方法があります。</p>
            </div>
            <div class="p-inheritance__number">
              <ul class="p-inheritance__number-lists">
                <li class="p-inheritance__number-list">
                  <span>法定相続：</span>民法で決められた人が決められた分だけもらう相続
                </li>
                <li class="p-inheritance__number-list">
                  <span>遺言による相続：</span>亡くなった人が遺言書により相続の内容を決める相続
                </li>
                <li class="p-inheritance__number-list">
                  <span>遺産分割協議による相続：</span>相続人全員で協議して遺産の分割方法を決める相続
                </li>
              </ul>

            </div>
            <div class="p-inheritance__text-wrapper">
              <p class="p-inheritance__text">被相続人（亡くなった人）が遺言を残している場合は、原則、この遺言書に沿って遺産は相続されます。</p>
              <p class="p-inheritance__text">一方、遺言書がない場合には、民法で定められた方法に沿って遺産を相続することになりますが、相続人全員で話し合って、民法で定められた分け方とは異なる内容で遺産を相続することもできます。</p>
              <p class="p-inheritance__text">親（父母）や夫、妻など近い親族が亡くなり<span class="p-inheritance__text--bold">相続が開始すると、遺産分割協議をはじめ、預貯金の解約、相続放棄、不動産の名義変更（相続登記）などの</span>遺産相続…様々な相続手続が待っており、なかなか悲しんでもいられないのが現実です。</p>
            </div>
            <div class="p-inheritance__bubble">
              <div class="p-inheritance__bubble-left">
                <figure class="p-inheritance__bubble-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/bubble_img.png" alt="所長" width="80" height="80">
                </figure>
                <p class="p-inheritance__bubble-text">所長</p>
              </div>
              <div class="p-inheritance__right">
                <p class="p-inheritance__right-bubbleText"><span>司法書士はこれら預貯金の解約や相続登記、遺産分割など、遺産相続に関する手続に深く関与する相続手続の専門家</span>ですので、相続に関するお悩みや手続き、費用のことなどは信頼・用できる司法書士にご相談ください。</p>
              </div>
            </div>
            <div class="p-inheritance__btn-wrapper">

              <a href="#" class="p-inheritance__btn">
                <p class="p-inheritance__btn-text">
                  次のページ：遺産整理業務
                </p>
                <div class="p-inheritance__btn-arrow">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="12" height="12">
                    <path fill-rule="evenodd"
                      d="M5.683,-0.003 L4.684,0.948 L9.290,5.325 L-0.001,5.325 L-0.001,6.669 L9.290,6.669 L4.684,11.047 L5.683,11.997 L11.997,5.996 L5.683,-0.003 Z" />
                  </svg>
                </div>
              </a>
            </div>


          </div>

        </div> -->
        <?php the_content(); ?>

        <?php get_template_part('includes/sidebar-legal'); ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>