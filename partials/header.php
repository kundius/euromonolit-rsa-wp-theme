<section class="header">
  <div class="ui-container header__container">
    
    <button class="header__toggle">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="header__logo">
      <a href="/">
        <img src="<?php bloginfo('template_url') ?>/dist/images/logo.png" alt="<?php bloginfo('name') ?>" />
      </a>
    </div>

    <div class="header__contacts">
      <button class="header__feedback" data-hystmodal="#feedback">
        <span class="header__feedback-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="19px" height="14px" viewBox="0 0 15 11">
            <path d="M0.794,10.758 L14.325,10.758 C14.362,10.758 14.398,10.750 14.430,10.735 L9.794,6.388 L7.559,9.093 L5.325,6.388 L0.689,10.735 C0.721,10.750 0.757,10.758 0.794,10.758 ZM0.547,10.383 L4.580,5.486 L0.547,0.604 L0.547,10.383 ZM0.869,0.240 L0.985,0.328 L7.559,7.340 L14.134,0.328 L14.250,0.240 L0.869,0.240 ZM14.572,0.604 L10.539,5.486 L14.572,10.383 L14.572,0.604 Z" />
          </svg>
        </span>
        <span class="header__feedback-text">Отправить заявку</span>
      </button>

      <div class="header__contacts-sep-1"></div>

      <a href="tel:<?php the_field('theme_phone', 'options') ?>" class="header__callback js-callback-or-modal">
        <span class="header__callback-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="18px" viewBox="0 0 16 18">
            <path d="M3.470,11.873 C0.669,6.893 0.71,3.870 0.703,2.836 C0.742,2.771 1.232,1.793 1.844,1.311 C3.154,0.278 3.508,0.268 5.762,2.963 C7.508,5.50 7.241,5.773 6.412,6.422 C5.735,6.953 4.369,6.865 4.340,6.932 C3.915,7.893 5.638,9.805 5.900,10.100 C5.792,9.979 8.755,13.385 9.813,12.936 C9.854,12.918 10.307,11.937 10.980,11.534 C11.947,10.955 12.62,10.610 13.521,12.251 C14.664,13.536 16.70,14.926 14.548,16.69 C13.985,16.491 13.416,16.915 13.373,16.939 C12.340,17.508 8.851,17.933 4.71,12.570 C4.35,12.530 3.628,12.63 3.470,11.873 Z" />
          </svg>
        </span>
        <span class="header__callback-text">Обратный звонок</span>
      </a>

      <div class="header__contacts-sep-2"></div>

      <a href="tel:<?php the_field('theme_phone', 'options') ?>" class="header__phone">
        <?php the_field('theme_phone', 'options') ?>
      </a>
    </div>

    <div class="header__menu">
      <?php wp_nav_menu([
        'container' => false,
        'theme_location' => 'menu-main',
        'menu_class' => 'header-menu'
      ]); ?>
    </div>

  </div>
</section>

<div class="header-placeholder"></div>
