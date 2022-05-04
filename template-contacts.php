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
            </div>

            <div class="contacts-layout__form">
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
