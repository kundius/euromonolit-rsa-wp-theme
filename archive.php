<!DOCTYPE html>
<html class="no-js" <?php language_attributes()?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head')?>
  </head>
  <body <?php body_class()?>>
    <?php wp_body_open()?>

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
          <?php if (have_posts()): ?>
          <div class="archive-grid js-magic-grid">
            <?php while (have_posts()): ?>
            <?php the_post() ?>
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

          <?php the_posts_pagination(['prev_text' => '', 'next_text' => '']) ?>
          <?php else: ?>
            <p>Извините, ничего не найдено.</p>
          <?php endif?>

          <div class="page-archive__content ui-content">
            <?php term_description() ?>
          </div>
        </div>
      </section>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
