<?php
$sticky = get_option('sticky_posts');

$articles = new WP_Query([
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => -1,
    'post__in' => $sticky,
    // 'meta_query' => [
    //     [
    //         'key' => 'post_favorite',
    //         'value' => 1,
    //     ],
    // ],
]);
?>
<div class="side-news">
  <div class="side-news__title">Акции</div>

  <?php if ($articles->have_posts()): ?>
  <div class="side-news__articles">
    <?php while ($articles->have_posts()): ?>
    <?php $articles->the_post()?>
    <article class="side-news-card">
      <figure class="side-news-card__image">
        <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="<?php the_title()?>" />
      </figure>
      <div class="side-news-card__body">
        <div class="side-news-grid__date">
          <?php echo get_the_date('d.m.Y') ?>
        </div>
        <div class="side-news-grid__title">
          <a href="<?php the_permalink()?>"><?php the_title()?></a>
        </div>
      </div>
    </article>
    <?php endwhile?>
    <?php wp_reset_postdata()?>
  </div>
  <?php endif?>
</div>
