<section class="header">
  <div class="header-first">
    <div class="ui-container ui-container_large header-first__container">
      <div class="header-address">
        <?php the_field('theme_address', 'options') ?>
      </div>
      <button class="header-feedback" data-hystmodal="#feedback">
        Задать вопрос специалисту
      </button>
    </div>
  </div>

  <div class="header-second-wrapper">
    <div class="header-second">
      <div class="ui-container ui-container_large header-second__container">
        <a href="/" class="header-logo">
          <img src="<?php bloginfo('template_url') ?>/dist/images/logo.png" alt="<?php bloginfo('name') ?>" class="header-logo__image" />
          <span class="header-logo__desc">ремонт    строительство    аренда</span>
        </a>

        <?php wp_nav_menu([
          'container' => false,
          'theme_location' => 'menu-main',
          'menu_class' => 'header-menu'
        ]) ?>

        <div class="header-contacts">
          <div class="header-contacts__group">
            <a href="tel:<?php the_field('theme_phone', 'options') ?>" class="header-contacts__phone"><?php the_field('theme_phone', 'options') ?></a>
            <a href="mailto:<?php the_field('theme_email', 'options') ?>" class="header-contacts__email"><?php the_field('theme_email', 'options') ?></a>
          </div>
          <button class="header-contacts__callback"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="header-placeholder"></div>
</section>
