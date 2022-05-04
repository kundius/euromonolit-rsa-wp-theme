<?php
/*
Template Name: Контакты
*/
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
      <?php get_template_part('partials/page-headline') ?>

      <section class="page-contacts">
        <div class="ui-container">
          <div class="contacts-layout">
            <div class="contacts-layout__map">
              <div class="contacts-map">
                <?php the_field('theme_footer-map', 'options') ?>
              </div>
            </div>

            <div class="contacts-layout__main">
              <div class="contacts-data">
                <div class="contacts-data__phone">
                  <a href="tel:<?php the_field('theme_phone', 'options') ?>" class="contacts-data__phone-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 25 25">
                      <path d="M12.912,24.142 C6.282,24.142 0.907,18.741 0.907,12.78 C0.907,5.415 6.282,0.14 12.912,0.14 C19.542,0.14 24.916,5.415 24.916,12.78 C24.916,18.741 19.542,24.142 12.912,24.142 ZM12.815,2.359 C7.460,2.359 3.119,6.722 3.119,12.104 C3.119,17.484 7.460,21.848 12.815,21.848 C18.170,21.848 22.511,17.484 22.511,12.104 C22.511,6.722 18.170,2.359 12.815,2.359 ZM17.63,16.688 L17.61,16.689 C17.62,16.690 16.283,17.150 16.283,17.150 L14.652,14.380 L15.430,13.917 C15.599,13.817 15.816,13.870 15.916,14.40 C15.917,14.42 17.187,16.196 17.187,16.196 L17.187,16.196 C17.283,16.360 17.241,16.582 17.63,16.688 ZM10.901,13.515 C8.611,9.514 9.835,7.749 10.267,7.424 L11.936,10.255 C11.534,10.493 11.727,11.31 11.967,11.556 C11.970,11.581 13.127,13.538 13.137,13.546 C13.735,14.359 14.59,14.734 14.444,14.506 L16.71,17.270 C15.610,17.556 13.314,17.731 10.901,13.515 ZM12.928,9.666 L12.927,9.667 C12.927,9.669 12.149,10.130 12.149,10.130 L10.482,7.296 L11.260,6.833 C11.428,6.734 11.645,6.787 11.746,6.958 C11.746,6.959 13.53,9.175 13.53,9.175 L13.53,9.177 C13.148,9.340 13.106,9.560 12.928,9.666 Z"></path>
                    </svg>
                    <?php the_field('theme_phone', 'options') ?>
                  </a>
                </div>

                <div class="contacts-data__group">
                  <div class="contacts-data__group-left">
                    <div class="contacts-data__messenger">
                      <div class="contacts-data__messenger-label">
                        Whatsapp / Viber:
                      </div>
                      <div class="contacts-data__messenger-value">
                        <?php the_field('theme_messenger', 'options') ?>
                      </div>
                    </div>
                  </div>
                  <div class="contacts-data__group-right">
                    <div class="contacts-data__social">
                      <div class="contacts-data__social-label">
                        Мы в соцсетях:
                      </div>
                      <div class="contacts-data__social-value">
                        <a href="#" class="contacts-data__social-telegram">
                          <img src="<?php bloginfo('template_url') ?>/dist/images/icon-telegram.svg" />
                        </a>
                        <a href="#" class="contacts-data__social-vk">
                          <img src="<?php bloginfo('template_url') ?>/dist/images/icon-vk.svg" />
                        </a>
                        <a href="#" class="contacts-data__social-ok">
                          <img src="<?php bloginfo('template_url') ?>/dist/images/icon-ok.svg" />
                        </a>
                        <a href="#" class="contacts-data__social-rutube">
                          <img src="<?php bloginfo('template_url') ?>/dist/images/icon-rutube.svg" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="contacts-data__address">
                  <div class="contacts-data__address-label">
                    Адрес:
                  </div>
                  <div class="contacts-data__address-value">
                    <?php the_field('theme_address', 'options') ?>
                  </div>
                </div>
              </div>

              <form action="/wp-json/contact-form-7/v1/contact-forms/19/feedback" method="post" class="contacts-form js-form">
                <div class="contacts-form__title">
                  Обратная связь
                </div>

                <div class="contacts-form__row">
                  <input type="text" name="your-name" class="ui-input" placeholder="Имя:" />
                </div>

                <div class="contacts-form__row">
                  <span class="wpcf7-form-control-wrap your-phone">
                    <input type="tel" name="your-phone" value="" class="ui-input" placeholder="Телефон*">
                  </span>
                </div>

                <div class="contacts-form__row">
                  <textarea rows="4" name="your-message" class="ui-textarea" placeholder="Дополнительная информация:"></textarea>
                </div>

                <div class="contacts-form__rules">
                  <span class="wpcf7-form-acceptance-wrap">
                    <label class="ui-rules">
                      <input type="checkbox" name="rules" value="1" class="form-checkbox">
                      <span></span>
                      <span>Прочитал(-а) <a href="<?php the_permalink(49) ?>" target="_blank">Пользовательское соглашение</a> и&nbsp;соглашаюсь с&nbsp;<a href="<?php the_permalink(3) ?>" target="_blank">Политикой конфиденциальности</a></span>
                    </label>
                  </span>
                </div>

                <div class="contacts-form__submit">
                  <button type="submit" class="ui-button-submit ui-button-submit_glare">
                    <span class="ui-loader-square contacts-form__loader"></span>
                    Отправить
                  </button>
                </div>

                <div class="contacts-form-result contacts-form-result_success">
                  <div class="contacts-form-result__title">
                    Ваше сообщение успешно отправлено
                  </div>
                  <div class="contacts-form-result__desc">
                    В ближайшее время мы свяжемся с вами.
                  </div>
                  <button class="contacts-form-result__close wpcf7-form-status-reset"></button>
                </div>

                <div class="contacts-form-result contacts-form-result_failed">
                  <div class="contacts-form-result__title">
                    Ваше сообщение успешно отправлено
                  </div>
                  <div class="contacts-form-result__desc">
                    В ближайшее время мы свяжемся с вами.
                  </div>
                  <button class="contacts-form-result__close wpcf7-form-status-reset"></button>
                </div>
              </form>
            </div>
          </div>

          <div class="page-contacts__content ui-content">
            <?php the_content() ?>
          </div>
        </div>
      </section>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
