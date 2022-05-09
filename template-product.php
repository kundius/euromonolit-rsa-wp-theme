<?php
/*
Template Name: Продукт
*/
$gallery = get_field('product_gallery');
$gallery_items = $gallery['items'] || [];
print_r($gallery);
$gallery_ids = implode(',', array_map(function($item) { return $item['id']; }, $gallery_items));
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head') ?>
  </head>
  <body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header') ?>
      <?php get_template_part('partials/page-breadcrumbs') ?>
      <?php get_template_part('partials/page-headline', null, [ 'is_product' => true ]) ?>

      <section class="product-body">
        <div class="ui-container">
          <div class="product-body__content ui-content">
            <?php the_content() ?>
          </div>

          <?php if (count($gallery_items) > 0): ?>
          <div class="product-gallery">
            <div class="product-gallery__title"><?php echo $gallery['title'] ?></div>
            <div class="product-gallery__items">
              <?php foreach ($gallery_items as $item): ?>
              <div class="product-gallery__item" data-modal-attachment="<?php echo $item['id'] ?>" data-modal-attachment-queue="<?php echo $gallery_ids ?>">
                <img src="<?php echo $item['sizes']['theme-medium'] ?>" alt="" />
              </div>
              <?php endforeach ?>
            </div>
          </div>
          <?php endif ?>

          <?php if ($include = get_field('product_include')): ?>
          <div class="product-include">
            <div class="product-include__gap-1"></div>
            <div class="product-include__title">
              <span><?php echo $include['title'] ?></span>
            </div>
            <div class="product-include__gap-2"></div>
            <div class="product-include__list">
              <?php foreach ($include['items'] as $item): ?>
              <div class="product-include__item">
                <?php echo $item['title'] ?>
              </div>
              <?php endforeach ?>
            </div>
          </div>
          <?php endif ?>

          <?php if ($price_info = get_field('product_price-info')): ?>
          <div class="product-price-info">
            <?php echo $price_info ?>
          </div>
          <?php endif ?>
        </div>
      </section>

      <?php get_template_part('partials/section-order') ?>

      <?php get_template_part('partials/section-how-we-work') ?>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
