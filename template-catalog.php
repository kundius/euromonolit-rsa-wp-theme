<?php
/*
Template Name: Каталог
 */

$products = new WP_Query([
    'post_type' => 'page',
    'post_parent' => get_the_ID(),
    'order' => 'ASC',
    'orderby' => 'menu_order',
]);
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes()?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head') ?>
  </head>
  <body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header') ?>
      <?php get_template_part('partials/page-breadcrumbs') ?>
      <?php get_template_part('partials/page-headline') ?>

      <div class="page-body catalog-body">
        <div class="ui-container">
          <div class="page-body__content ui-content">
            <?php the_content() ?>
          </div>

          <?php if ($products->have_posts()): ?>
          <div class="catalog-body__products">
            <div class="catalog-grid">
              <?php while ($products->have_posts()): ?>
              <?php $products->the_post()?>
              <div class="catalog-grid__cell">
                <article class="catalog-card">
                  <figure class="catalog-card__image">
                    <img src="<?php the_post_thumbnail_url('theme-small') ?>" alt="<?php the_title() ?>" />
                  </figure>
                  <div class="catalog-card__body">
                    <h2 class="catalog-card__title">
                      <?php echo (get_field('product_title-in-card') ?: get_the_title()) ?>
                    </h2>
                    <div class="catalog-card__more">
                      <a href="<?php the_permalink() ?>" class="ui-button-more">
                        Узнать больше
                        <span class="ui-button-more__arrow"></span>
                      </a>
                    </div>
                  </div>
                </article>
              </div>
              <?php endwhile?>
              <?php wp_reset_postdata()?>
            </div>
          </div>
          <?php endif?>

          <div class="catalog-body__content ui-content">
            <?php the_content()?>
          </div>

        </div>
      </div>

      <?php get_template_part('partials/section-order') ?>

      <?php get_template_part('partials/section-how-we-work') ?>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
