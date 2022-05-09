<?php
/*
Template Name: Продукт
*/
$gallery = get_field('product_gallery');
$gallery_items = $gallery['items'] ?: [];
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
            <div class="product-price-info__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="35px" viewBox="0 0 27 35">
                <path fill-rule="evenodd" fill="currentColor" d="M1.96,8.449 C2.127,6.3 3.309,4.319 4.423,3.179 C6.340,1.217 8.188,0.817 8.797,0.920 C8.885,0.935 8.957,0.945 9.29,0.956 C9.912,1.80 10.831,1.209 11.917,3.138 C12.738,4.595 13.851,6.263 14.495,7.745 C14.730,8.285 14.779,9.155 14.641,9.928 C14.510,10.665 14.201,11.362 13.707,11.712 C12.636,12.471 11.236,13.42 10.67,13.700 C9.763,13.872 9.533,14.202 9.603,14.564 C9.760,15.375 10.702,17.333 11.768,19.250 C12.835,21.171 14.5,23.10 14.612,23.573 C14.886,23.827 15.281,23.808 15.591,23.638 C16.768,22.993 17.987,22.109 19.201,21.598 L19.200,21.597 C19.759,21.362 20.514,21.468 21.209,21.746 C21.937,22.38 22.649,22.539 22.984,23.25 C23.906,24.363 24.726,26.180 25.531,27.651 C26.595,29.594 26.219,30.442 25.859,31.255 C25.844,31.308 25.790,31.412 25.767,31.470 C25.531,32.42 24.215,33.397 21.536,33.989 C19.975,34.334 17.920,34.448 15.303,34.32 C14.611,33.922 13.913,33.713 13.216,33.419 C9.636,31.909 6.150,28.93 3.722,23.714 C1.294,19.337 0.97,14.362 0.511,10.536 C0.628,9.800 0.821,9.101 1.96,8.449 L1.96,8.449 ZM7.536,4.483 C7.855,4.289 8.271,4.392 8.464,4.712 C8.658,5.32 8.555,5.448 8.235,5.642 C6.193,6.880 4.518,10.563 4.718,12.999 C4.745,13.372 4.466,13.697 4.94,13.725 C3.721,13.753 3.396,13.474 3.368,13.101 C3.144,10.179 5.21,6.7 7.536,4.483 L7.536,4.483 ZM5.391,4.127 C4.377,5.164 3.296,6.709 2.341,8.974 C2.113,9.515 1.950,10.111 1.849,10.750 C1.289,14.270 2.611,18.923 4.907,23.60 C7.201,27.198 10.449,30.785 13.741,32.174 C14.331,32.422 14.925,32.600 15.518,32.694 C17.951,33.81 19.832,32.981 21.244,32.669 C23.395,32.195 24.365,31.317 24.511,30.960 C24.519,30.940 24.618,30.707 24.620,30.708 C24.849,30.192 25.85,29.654 24.344,28.299 C23.567,26.879 22.757,25.75 21.872,23.793 C21.682,23.517 21.213,23.207 20.709,23.5 C20.308,22.844 19.926,22.761 19.727,22.845 L19.724,22.844 C18.579,23.325 17.364,24.210 16.239,24.826 C15.419,25.275 14.391,25.215 13.692,24.566 C12.981,23.906 11.710,21.932 10.584,19.904 C9.463,17.888 8.462,15.777 8.277,14.821 C8.95,13.880 8.584,12.979 9.402,12.518 C10.519,11.888 11.909,11.328 12.926,10.608 C13.103,10.483 13.235,10.113 13.311,9.689 C13.406,9.154 13.389,8.593 13.255,8.285 C12.631,6.849 11.531,5.217 10.736,3.804 C9.975,2.455 9.394,2.373 8.836,2.294 C8.741,2.281 8.646,2.267 8.568,2.254 C8.189,2.190 6.932,2.550 5.391,4.127 L5.391,4.127 Z"/>
              </svg>
            </div>
            <div class="product-price-info__desc">
              <?php echo $price_info ?>
            </div>
          </div>
          <?php endif ?>

          <div class="product-body__arrow"></div>
        </div>
      </section>

      <?php get_template_part('partials/section-order') ?>

      <?php get_template_part('partials/section-how-we-work') ?>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
