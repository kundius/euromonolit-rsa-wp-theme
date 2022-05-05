<?php
$sticky_posts = new WP_Query([
  'post_type' => 'post',
  'order' => 'DESC',
  'orderby' => 'date',
  'cat' => get_queried_object_id(),
  'posts_per_page' => 1,
  'ignore_sticky_posts' => true,
  // 'post__in' => $sticky,
  'meta_query' => [
      [
          'key' => 'post_favorite',
          'value' => 1,
      ],
  ],
]);

$sticky = get_option('sticky_posts');
$category = get_queried_object();
$query_params = [
  'post_type' => 'post',
  // 'posts_per_page' => 10,
  // 'order' => 'DESC',
  // 'orderby' => [
  //   'date',
  //   'post__in' => ''
  // ],
  'post__in' => get_option('sticky_posts'),
  'orderby' => [
    'meta_value' => 'DESC',
    'date' => 'DESC',
  ],,
  'meta_key' => 'is_sticky',
  'paged' => get_query_var('paged') ?: 1,
  'tax_query' => [
    'relation' => 'AND',
    [
      'taxonomy' => $category->taxonomy,
      'field' => 'id',
      'terms' => [$category->term_id]
    ]
  ]
];
$articles = new WP_Query($query_params);
$pagination = [
  'prev_text' => '',
  'next_text' => '',
  'total' => $articles->max_num_pages,
  'current' => max(1, get_query_var('paged'))
];
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

      <div class="page-headline">
        <div class="ui-container">
          <h1 class="page-headline__title"><?php single_cat_title() ?></h1>
        </div>
      </div>

      <section class="page-archive">
        <div class="ui-container">
          <?php if ($sticky_posts->have_posts()): while ($sticky_posts->have_posts()): $sticky_posts->the_post(); ?>
          <article class="archive-sticky">
            <figure class="archive-sticky__image">
              <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>" />
            </figure>
            <div class="archive-sticky__body">
              <h2 class="archive-sticky__title">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h2>
              <div class="archive-sticky__date">
                  <?php echo get_the_date('d.m.Y, l') ?>
              </div>
            </div>
          </article>
          <?php endwhile; wp_reset_postdata(); endif; ?>
          
          <?php if ($articles->have_posts()): ?>
          <div class="archive-grid js-magic-grid">
            <?php while ($articles->have_posts()): ?>
            <?php $articles->the_post() ?>
            <div class="archive-grid__cell">
              <article class="archive-card">
                <figure class="archive-card__image">
                  <img src="<?php the_post_thumbnail_url('theme-medium') ?>" alt="<?php the_title() ?>" />
                </figure>
                <div class="archive-card__body">
                  <div class="archive-card__date">
                    <?php echo get_the_date('d.m.Y, l') ?>
                  </div>
                  <h2 class="archive-card__title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                  </h2>
                  <div class="archive-card__excerpt">
                    <?php the_excerpt() ?>
                  </div>
                </div>
              </article>
            </div>
            <?php endwhile?>
            <?php wp_reset_postdata() ?>
          </div>

          <?php the_posts_pagination($pagination) ?>
          <?php else: ?>
            <p>Извините, ничего не найдено.</p>
          <?php endif?>

          <div class="page-archive__content ui-content"><?php term_description() ?></div>
        </div>
      </section>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
