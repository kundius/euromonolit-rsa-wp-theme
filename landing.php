<?php
/*
Template Name: Главная
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
              form
            </div>
          </div>
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
