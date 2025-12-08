<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_bg.webp" alt="" width="1500" height="150">
        </figure>
        <h2 class="p-page-mv__title">遺産相続</h2>

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
              遺産相続
            </a>
          </li>
          <li class="p-breadcrumbs__list">
            <div class="p-breadcrumbs__icon">
              <svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill-rule="evenodd" fill="rgb(0, 0, 0)"
                  d="M4.873,4.999 L0.241,9.563 L0.683,9.999 L5.758,4.999 L0.683,-0.001 L0.241,0.435 L4.873,4.999 Z" />
              </svg>
            </div>
          </li>
          <li class="p-breadcrumbs__list">
            <a href="#" class="p-breadcrumbs__link">
              遺産相続
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
        <div class="p-inheritance__main">
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
        </div>

        <!-- サイドバー -->
        <aside class="p-inheritance__sidebar p-sidebar">
          <div class="p-sidebar__menu">
            <h3 class="p-sidebar__title">法務サポート</h3>
            <ul class="p-sidebar__menu-list">
              <li class="p-sidebar__menu-item p-sidebar__menu-item--parent">
                <button class="p-sidebar__menu-toggle" type="button">
                  遺産相続
                  <span class="p-sidebar__menu-icon"></span>
                </button>
                <ul class="p-sidebar__submenu">
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance" class="p-sidebar__submenu-link">遺産相続</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-property" class="p-sidebar__submenu-link">遺産相続財産</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#inheritance-flow" class="p-sidebar__submenu-link">遺産相続財産の流れ</a>
                  </li>
                  <li class="p-sidebar__submenu-item">
                    <a href="#heir" class="p-sidebar__submenu-link">相続権者</a>
                  </li>
                </ul>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#succession-order" class="p-sidebar__menu-link">相続の順番</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#gift" class="p-sidebar__menu-link">贈与</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#property-registration" class="p-sidebar__menu-link">不動産登記</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#guardianship" class="p-sidebar__menu-link">成年後見</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#other-contracts" class="p-sidebar__menu-link">その他契約</a>
              </li>
              <li class="p-sidebar__menu-item">
                <a href="#price-list" class="p-sidebar__menu-link">料金表</a>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>