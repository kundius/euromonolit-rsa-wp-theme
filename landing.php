<?php
/*
Template Name: Главная
*/
$products = new WP_Query([
  'post_type' => 'page',
  'post_parent' => 13,
  'order' => 'ASC',
  'orderby' => 'menu_order',
]);
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head') ?>
  </head>
  <body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header', null, ['is_float' => true]) ?>

      <section class="intro">
        <div class="ui-container">
          <div class="intro-layout">
            <div class="intro-layout__content">
              <div class="intro-content">
                <div class="intro-content__title">Ремонт опалубки</div>
                <div class="intro-content__subtitle">в Санкт-Петербурге и области</div>
                <div class="intro-content__desc">
                  <span>Качественная опалубка ведущих европейских<br />
                  и российских производителей со склада в Санкт-Петербурге</span>
                </div>
              </div>
            </div>
            <div class="intro-layout__form">
              <form action="/wp-json/contact-form-7/v1/contact-forms/19/feedback" method="post" class="intro-form js-form">
                <div class="intro-form__title">
                  Заказать обратный<br />
                  звонок
                </div>

                <div class="intro-form__subtitle">
                  и получите бесплатную консультацию
                </div>

                <div class="intro-form__row">
                  <input type="text" name="your-name" class="ui-input" placeholder="Имя:" />
                </div>

                <div class="intro-form__row">
                  <span class="wpcf7-form-control-wrap your-phone">
                    <input type="tel" name="your-phone" value="" class="ui-input" placeholder="Телефон*">
                  </span>
                </div>

                <div class="intro-form__row">
                  <textarea rows="4" name="your-message" class="ui-textarea" placeholder="Дополнительная информация:"></textarea>
                </div>

                <div class="intro-form__rules">
                  <span class="wpcf7-form-acceptance-wrap">
                    <label class="ui-rules">
                      <input type="checkbox" name="rules" value="1" class="form-checkbox">
                      <span></span>
                      Прочитал(-а) <a href="<?php the_permalink(49) ?>" target="_blank">Пользовательское соглашение</a> и&nbsp;соглашаюсь с&nbsp;<a href="<?php the_permalink(3) ?>" target="_blank">Политикой конфиденциальности</a>
                    </label>
                  </span>
                </div>

                <div class="intro-form__submit">
                  <button type="submit" class="ui-button-submit ui-button-submit_glare">
                    <span class="ui-loader-square intro-form__loader"></span>
                    Отправить
                  </button>
                </div>

                <div class="intro-form__success">
                  <div class="intro-form-result intro-form-result_success">
                    <div class="intro-form-result__head">
                      <div class="intro-form-result__head-icon"></div>
                      <div class="intro-form-result__head-title">
                        Ваше сообщение
                        успешно отправлено
                      </div>
                    </div>
                    <div class="intro-form-result__body">
                      <div class="intro-form-result__body-text">
                        В ближайшее время<br />
                        мы свяжемся с вами.
                      </div>
                      <div class="intro-form-result__body-close wpcf7-form-status-reset">
                        Закрыть окно
                      </div>
                    </div>
                  </div>
                </div>

                <div class="intro-form__failed">
                  <div class="intro-form-result intro-form-result_failed">
                    <div class="intro-form-result__head">
                      <div class="intro-form-result__head-icon"></div>
                      <div class="intro-form-result__head-title">
                        Возникла ошибка
                      </div>
                    </div>
                    <div class="intro-form-result__body">
                      <div class="intro-form-result__body-text">
                        Не удалось<br />
                        отправить сообщение
                      </div>
                      <div class="intro-form-result__body-close wpcf7-form-status-reset">
                        Закрыть окно
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?php $landing_catalog = get_field('landing_catalog') ?>
      <section class="landing-catalog">
        <div class="ui-container">

          <?php if (!empty($landing_catalog['title'])): ?>
          <div class="landing-catalog__title">
            <?php echo $landing_catalog['title'] ?>
          </div>
          <?php endif ?>

          <?php if (!empty($landing_catalog['subtitle'])): ?>
          <div class="landing-catalog__subtitle">
            <?php echo $landing_catalog['subtitle'] ?>
          </div>
          <?php endif ?>

          <?php if (!empty($landing_catalog['content'])): ?>
          <div class="landing-catalog__content">
            <?php echo $landing_catalog['content'] ?>
          </div>
          <?php endif ?>

          <?php if ($products->have_posts()): ?>
          <div class="landing-catalog__products">
            <?php while ($products->have_posts()): ?>
            <?php $products->the_post()?>
            <div class="landing-catalog__products-item">
              <article class="catalog-card">
                <figure class="catalog-card__image">
                  <img src="<?php the_post_thumbnail_url('theme-medium') ?>" alt="<?php the_title() ?>" />
                </figure>
                <div class="catalog-card__body">
                  <h2 class="catalog-card__title">
                    <?php the_title() ?>
                  </h2>
                  <div class="catalog-card__more">
                    <a href="<?php the_permalink() ?>" class="ui-button-more">
                      Узнать больше
                    </a>
                  </div>
                </div>
              </article>
            </div>
            <?php endwhile?>
            <?php wp_reset_postdata()?>
          </div>
          <?php endif?>

        </div>
      </section>

      <div class="ui-content">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php the_content() ?>
      </div>
      
      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
