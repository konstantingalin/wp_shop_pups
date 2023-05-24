<?php get_header(); ?>
<header class="top_slider section" id="top_slider">
		<div class="section__content">
      <div class="top_slider__content">
        <div class="top_slider__text">
          <h2 class='main_text'>
            Новое поступление подгузников
          </h2>
          <h3 class="title_text">
            Узнай больше о новых брендах!
          </h3>
          <div class="button_box">
            <a href="#" class="button">
              Узнать больше
            </a>
          </div>
        </div>
        <div class="top_slider__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/img_1.png" alt="">
        </div>
      </div>
    </div>
</header>
<section class="advantage section" id="advantage">
		<div class="section__content">
      <div class="advantage__items">
        <div class="advantage__items__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/icons/delivery_icon.svg" alt="иконка доставка">
          <h4>Быстрая доставка</h4>
          <p>Бережно доставляем товары в&nbsp;течении 3-х&nbsp;дней</p>
        </div>
        <div class="advantage__items__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/icons/money_icon.svg" alt="иконка доставка">
          <h4>Доступные цены</h4>
          <p>Работаем с лучшими производителями подгузников</p>
        </div>
        <div class="advantage__items__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/icons/discount_icon.svg" alt="иконка доставка">
          <h4>Бонусы за покупки</h4>
          <p>Дарим подарки и скидки всем&nbsp;покупателям</p>
        </div>
        <div class="advantage__items__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/icons/like_icon.svg" alt="иконка доставка">
          <h4>Гарантия качества</h4>
          <p>Соответствуем требованиям и&nbsp;стандартам качества</p>
        </div>
      </div>
    </div>
</section>
<section class="recommendation section" id="recommendation">
		<div class="section__content">
      <p class="recommendation__main_text">
        Рекомендуем
      </p>
      <div class="recommendation__items">
        <?php 
          echo do_shortcode('[featured_products]');
        ?>
      </div>
    </div>
</section>
<section class="delivery section" id="delivery">
		<div class="section__content">

  </div>
</section>


<?php get_footer(); ?>