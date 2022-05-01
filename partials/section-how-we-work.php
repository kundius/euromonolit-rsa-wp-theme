<?php $how_we_work = get_field('theme_how-we-work', 'option') ?>
<section class="how-we-work">
  <div class="ui-container">
    <div class="how-we-work__title">
      <?php echo $how_we_work['title'] ?>
    </div>
    <div class="how-we-work__items">
      <?php foreach ($how_we_work['items'] as $key => $item): ?>
      <article class="how-we-work__item">
        <div class="how-we-work__item-number">
          <?php echo ($key + 1) ?>
        </div>
        <div class="how-we-work__item-arrow"></div>
        <div class="how-we-work__item-icon">
          <img src="<?php echo $item['icon'] ?>" />
        </div>
        <div class="how-we-work__item-name">
          <?php echo $item['name'] ?>
        </div>
      </article>
      <?php endforeach ?>
    </div>
  </div>
</section>
