<section class="section-order">
  <div class="ui-container section-order__container">
    <div class="section-order__title">
      Готовы <span>заказать</span> ремонт?
    </div>
    <div class="section-order__description">
      У нас Вы можете заказать ремонт опалубки и быть уверены, что результат превзойдёт все ожидания. Мы гарантируем качественный и&nbsp;надежный ремонт оборудования, которое будет служить для проведения строительных работ намного дольше.
    </div>
    <div class="section-order__form">
      <form action="/wp-json/contact-form-7/v1/contact-forms/150/feedback" method="post" class="section-order-form js-form">
        <div class="section-order-form__field">
          <input type="text" name="your-name" class="ui-input-flat" placeholder="Имя:" />
        </div>

        <div class="section-order-form__field">
          <span class="wpcf7-form-control-wrap your-phone">
            <input type="tel" name="your-phone" value="" class="ui-input-flat" placeholder="Телефон*">
          </span>
        </div>

        <div class="section-order-form__submit">
          <button type="submit" class="ui-button-submit ui-button-submit_glare">
            <span class="ui-loader-square section-order-form__loader"></span>
            Заказать консультацию
          </button>
        </div>

        <div class="section-order-form__rules">
          <span class="wpcf7-form-acceptance-wrap">
            <label class="ui-rules">
              <input type="checkbox" name="rules" value="1" class="form-checkbox">
              <span></span>
              <span>Прочитал(-а) <a href="<?php the_permalink(49) ?>" target="_blank">Пользовательское соглашение</a> и&nbsp;соглашаюсь с&nbsp;<a href="<?php the_permalink(3) ?>" target="_blank">Политикой конфиденциальности</a></span>
            </label>
          </span>
        </div>

        <div class="section-order-form-result section-order-form-result_success">
          <div class="section-order-form-result__title">
            Ваше сообщение успешно отправлено
          </div>
          <div class="section-order-form-result__desc">
            В ближайшее время мы свяжемся с вами.
          </div>
          <button class="section-order-form-result__close wpcf7-form-status-reset"></button>
        </div>

        <div class="section-order-form-result section-order-form-result_failed">
          <div class="section-order-form-result__title">
            Ваше сообщение успешно отправлено
          </div>
          <div class="section-order-form-result__desc">
            В ближайшее время мы свяжемся с вами.
          </div>
          <button class="section-order-form-result__close wpcf7-form-status-reset"></button>
        </div>
      </form>
    </div>
  </div>
</section>
