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

      <div class="single-body">
        <div class="ui-container">
          <div class="single-layout">
            <div class="single-layout__content">
              <div class="single-headline">
                <div class="single-headline__date">
                  <?php echo get_the_date('d.m.Y') ?>
                </div>

                <h1 class="single-headline__title"><?php the_title()?></h1>
              </div>

              <div class="single-main">
                <?php if (has_post_thumbnail()): ?>
                  <figure class="single-thumbnail">
                    <div class="single-thumbnail__image">
                      <?php the_post_thumbnail('full')?>
                    </div>
                    <?php if ($caption = get_the_post_thumbnail_caption()): ?>
                    <div class="single-thumbnail__caption">
                      <?php echo $caption ?>
                    </div>
                    <?php endif?>
                  </figure>
                <?php endif?>

                <div class="single-meta">
                  <div class="single-meta__tags">
                    <?php the_tags('')?>
                  </div>
                  <div class="single-meta__share">
                    <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,odnoklassniki,telegram"></div>
                  </div>
                </div>

                <div class="single-main__content ui-content">
                  <?php the_content() ?>
                </div>

                <div class="single-meta">
                  <div class="single-meta__tags">
                    <?php the_tags('')?>
                  </div>
                  <div class="single-meta__share">
                    <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,odnoklassniki,telegram"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="single-layout__side">
              <div class="single-layout__side-sicky">
                <?php get_template_part('partials/side-news')?>
                <?php get_template_part('partials/side-subscribe')?>
              </div>
            </div>
          </div>

          <?php if ($see_also = get_field('post_see-also')): ?>
          <div class="see-also">
            <div class="see-also__title">Читайте также:</div>
            <div class="see-also__grid">
              <?php foreach ($see_also as $item): ?>
              <?php setup_postdata($item)?>
              <div class="see-also__grid-cell">
                <article class="archive-card">
                  <figure class="archive-card__image">
                    <img src="<?php the_post_thumbnail_url('theme-medium')?>" alt="<?php the_title()?>" />
                  </figure>
                  <div class="archive-card__body">
                    <div class="archive-card__date">
                      <?php the_date('d.m.Y')?>
                    </div>
                    <h2 class="archive-card__title">
                      <a href="<?php the_permalink()?>"><?php the_title()?></a>
                    </h2>
                    <div class="archive-card__excerpt">
                      <?php the_excerpt()?>
                    </div>
                  </div>
                  <div class="archive-card__tags">
                    <?php the_tags('')?>
                  </div>
                </article>
              </div>
              <?php endforeach?>
              <?php wp_reset_postdata()?>
            </div>
          </div>
          <?php endif?>
        </div>
      </div>

      <script src="https://yastatic.net/share2/share.js"></script>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
