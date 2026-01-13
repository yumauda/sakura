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
        
        <?php the_content(); ?>

        <?php get_template_part('includes/sidebar-legal'); ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/contact'); ?>

</main>
<?php get_footer() ?>