<div>
    <div class="footer__counters">
      <?php the_field('theme_counters', 'options') ?>
    </div>
</div>

<section class="footer">
  <div class="ui-container footer__container">
    <div class="footer__copyright">
      <?php the_field('theme_copyright', 'options') ?>
    </div>

    <div class="footer__links">
      <div class="footer__links-item">
        <a href="<?php the_permalink(297) ?>">Карта сайта</a>
      </div>
      <div class="footer__links-item">
        <a href="<?php the_permalink(297) ?>">Пользовательское соглашение</a>
      </div>
      <div class="footer__links-item">
        <a href="<?php the_permalink(297) ?>">Политика обработки персональных данных</a>
      </div>
    </div>
    
    <div class="footer__creator">
      <a href="https://domenart-studio.ru/" target="_blank">
        <img src="<?php bloginfo('template_url')?>/dist/images/creator.png" alt="Разработка и продвижение сайтов «ДоменАРТ»" />
      </a>
    </div>
  </div>
</section>

<button class="scroll-up">
  <span>Наверх</span>
</button>

<div class="drawer">
  <button class="drawer__overlay"></button>

  <div class="drawer__body">
    <button class="drawer__close"></button>

    <div class="drawer__content">
      <div class="drawer-headline">
        <div class="drawer-headline__about">
          <a href="/" class="drawer-headline__logo">
            <img src="<?php bloginfo('template_url')?>/dist/images/logo.png" alt="<?php bloginfo('name')?>" />
          </a>
          <a href="tel:<?php the_field('theme_phone', 'options') ?>" class="drawer-headline__phone">
            <?php the_field('theme_phone', 'options') ?>
          </a>
        </div>
        <button class="drawer-headline__feedback" data-hystmodal="#feedback">
          <svg xmlns="http://www.w3.org/2000/svg" width="19px" height="14px" viewBox="0 0 15 11">
            <path d="M0.794,10.758 L14.325,10.758 C14.362,10.758 14.398,10.750 14.430,10.735 L9.794,6.388 L7.559,9.093 L5.325,6.388 L0.689,10.735 C0.721,10.750 0.757,10.758 0.794,10.758 ZM0.547,10.383 L4.580,5.486 L0.547,0.604 L0.547,10.383 ZM0.869,0.240 L0.985,0.328 L7.559,7.340 L14.134,0.328 L14.250,0.240 L0.869,0.240 ZM14.572,0.604 L10.539,5.486 L14.572,10.383 L14.572,0.604 Z" />
          </svg>
        </button>
      </div>

      <?php wp_nav_menu([
        'container' => false,
        'theme_location' => 'menu-main',
        'menu_class' => 'drawer-menu',
      ]);?>

      <div class="drawer-contacts">
        <a href="mail:info@euromonolit.com" class="drawer-contacts__email">
          <span class="drawer-contacts__email-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="19px" height="14px" viewBox="0 0 15 11">
              <path d="M0.794,10.758 L14.325,10.758 C14.362,10.758 14.398,10.750 14.430,10.735 L9.794,6.388 L7.559,9.093 L5.325,6.388 L0.689,10.735 C0.721,10.750 0.757,10.758 0.794,10.758 ZM0.547,10.383 L4.580,5.486 L0.547,0.604 L0.547,10.383 ZM0.869,0.240 L0.985,0.328 L7.559,7.340 L14.134,0.328 L14.250,0.240 L0.869,0.240 ZM14.572,0.604 L10.539,5.486 L14.572,10.383 L14.572,0.604 Z" />
            </svg>
          </span>
          <span class="drawer-contacts__email-text">info@euromonolit.com</span>
        </a>
        <div class="drawer-contacts__time">
          <strong>График работы:</strong><br />
            <?php the_field('theme_schedule', 'options') ?>
        </div>
      </div>

      <div class="drawer-addess">
        <div class="drawer-addess__item">
          <div class="drawer-addess__item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="18px" viewBox="0 0 13 18">
              <path d="M6.499,3.308 C8.306,3.308 9.774,4.833 9.774,6.709 C9.774,8.586 8.306,10.110 6.499,10.110 C4.692,10.110 3.224,8.586 3.224,6.709 C3.224,4.834 4.694,3.308 6.499,3.308 L6.499,3.308 ZM6.504,0.6 C10.106,0.41 12.999,2.973 12.999,6.741 C12.999,6.994 12.984,7.255 12.957,7.506 C12.592,10.863 9.174,15.473 6.925,17.809 C6.690,18.53 6.308,18.53 6.73,17.809 C3.824,15.473 0.406,10.863 0.41,7.506 C0.14,7.255 0.0,6.994 0.0,6.741 C0.0,2.980 2.893,0.34 6.494,0.6 L6.504,0.6 L6.504,0.6 ZM6.499,1.239 C3.564,1.276 1.204,3.674 1.204,6.741 C1.204,6.865 1.207,6.969 1.211,7.55 C1.369,10.55 4.550,14.333 6.499,16.470 C8.397,14.389 11.447,10.263 11.762,7.369 C11.784,7.157 11.794,6.954 11.794,6.741 C11.794,3.674 9.434,1.276 6.499,1.239 L6.499,1.239 ZM6.499,4.559 C5.352,4.559 4.429,5.518 4.429,6.709 C4.429,7.897 5.354,8.859 6.499,8.859 C7.643,8.859 8.569,7.898 8.569,6.709 C8.569,5.519 7.644,4.559 6.499,4.559 L6.499,4.559 Z" />
            </svg>
          </div>
          <div class="drawer-addess__item-body">
            <div class="drawer-addess__item-title">Офис:</div>
            <div class="drawer-addess__item-content">
              <?php the_field('theme_address-office', 'options') ?>
            </div>
          </div>
        </div>
        <div class="drawer-addess__item">
          <div class="drawer-addess__item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="18px" viewBox="0 0 13 18">
              <path d="M6.499,3.308 C8.306,3.308 9.774,4.833 9.774,6.709 C9.774,8.586 8.306,10.110 6.499,10.110 C4.692,10.110 3.224,8.586 3.224,6.709 C3.224,4.834 4.694,3.308 6.499,3.308 L6.499,3.308 ZM6.504,0.6 C10.106,0.41 12.999,2.973 12.999,6.741 C12.999,6.994 12.984,7.255 12.957,7.506 C12.592,10.863 9.174,15.473 6.925,17.809 C6.690,18.53 6.308,18.53 6.73,17.809 C3.824,15.473 0.406,10.863 0.41,7.506 C0.14,7.255 0.0,6.994 0.0,6.741 C0.0,2.980 2.893,0.34 6.494,0.6 L6.504,0.6 L6.504,0.6 ZM6.499,1.239 C3.564,1.276 1.204,3.674 1.204,6.741 C1.204,6.865 1.207,6.969 1.211,7.55 C1.369,10.55 4.550,14.333 6.499,16.470 C8.397,14.389 11.447,10.263 11.762,7.369 C11.784,7.157 11.794,6.954 11.794,6.741 C11.794,3.674 9.434,1.276 6.499,1.239 L6.499,1.239 ZM6.499,4.559 C5.352,4.559 4.429,5.518 4.429,6.709 C4.429,7.897 5.354,8.859 6.499,8.859 C7.643,8.859 8.569,7.898 8.569,6.709 C8.569,5.519 7.644,4.559 6.499,4.559 L6.499,4.559 Z" />
            </svg>
          </div>
          <div class="drawer-addess__item-body">
            <div class="drawer-addess__item-title">Склад:</div>
            <div class="drawer-addess__item-content">
              <?php the_field('theme_address-warehouse', 'options') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('partials/modals') ?>

<?php wp_footer() ?>
