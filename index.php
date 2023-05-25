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
    <div  class="delivery__content">
      <div class="delivery__content__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/imgs/delivery_img.png" alt="мужик">
      </div>
      <div class="delivery__content__texts">
        <h3 class="main_text">
          Бесплатная доставка при заказе от 5&nbsp;000&nbsp;₸
        </h3>
        <p class="title_text">
          Доставим ваш товар до двери на любой этаж в течении 3 дней
        </p>
      </div>
    </div>
  </div>
</section>
<section class="manufacturers section" id="manufacturers">
  <div class="section__content">
    <div class="manufacturers__main_text">
      <h4>
        Производители
      </h4>
    </div>
    <div  class="manufacturers__items">
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_1.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_2.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_3.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_4.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_5.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_6.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_7.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_8.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_9.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_10.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_11.png" alt="временное лого">
      </div>
      <div class="manufacturers__items__item">
        <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/logo_12.png" alt="временное лого">
      </div>
    </div>
  </div>
</section>
<section class="news section" id="manufacturers">
  <div class="section__content">
    <div class="news__main_text">
      <h4>
        Новости
      </h4>
    </div>
    <div class="news__items">
      <div class="news__items__item">
        <div class="news__items__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/post_image_1.png" alt="временная картинка">
        </div>
        <div class="news__items__texts">
          <p class="news__items__date">
            25 декабря 2022
          </p>
          <h3 class="news__items__main_text">
            Обзор на подгузники MANUOKI Ultra Slim Diapers
          </h3>
          <p class="news__items__title_text">
            Подгузники MANUOKI – это сложная система большого количества слоев различных материалов, каждый их которых выполняет свою функцию и дополняет друг друга
          </p>
        </div>
      </div>
      <div class="news__items__item">
        <div class="news__items__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/post_image_2.png" alt="временная картинка">
        </div>
        <div class="news__items__texts">
          <p class="news__items__date">
            25 декабря 2022
          </p>
          <h3 class="news__items__main_text">
            Подгузники-трусики Joonies Premium Soft
          </h3>
          <p class="news__items__title_text">
            Попробовав трусики  JOONIES Premium Soft один раз, вы уже не сможете без них обойтись!
          </p>
        </div>
      </div>
      <div class="news__items__item">
        <div class="news__items__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/public/temp/post_image_3.png" alt="временная картинка">
        </div>
        <div class="news__items__texts">
          <p class="news__items__date">
            25 декабря 2022
          </p>
          <h3 class="news__items__main_text">
            Обзор на японские премиальные подгузники, MELLO
          </h3>
          <p class="news__items__title_text">
            Подгузник состоит на 100% из японского материала высшего качества AbsorbGuard, с&nbsp;поглощаемостью до 550мл жидкости
          </p>
        </div>
    </div>
  </div>
</section>
<section class="recommendation recommendation2 section" id="recommendation">
		<div class="section__content">
      <p class="recommendation__main_text recommendation__main_text">
        Недавно просматривали
      </p>
      <div class="recommendation__items">
        <?php 
          echo do_shortcode('[featured_products]');
        ?>
      </div>
    </div>
</section>

<?php get_footer(); ?>