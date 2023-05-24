<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header section" id="header">
		<div class="section__content">
      <div class="top_bar">
        <div class="top_bar__location">
          <p class="city">
            Рудный
          </p>
        </div>
        <div class="top_bar__menu">
          <?php 
            wp_nav_menu( 
              array(
                'theme_location' => 'top-menu',
              )
            );
          ?>  
        </div>
      </div>
      <div class="top_content">
        <div class="top_content__logo">
          <a href='<?php echo home_url(); ?>'>
            <img src="<?php echo get_template_directory_uri() . '/assets/public/imgs/logo.svg'?>" alt='логотип сайта "Пупс.kz"'>
          </a>
        </div>
        <div class="top_content__catalog">
            <a href="<?php echo home_url() . '/shop' ?>" class="button catalog_button">
              <img src="<?php echo get_template_directory_uri() . '/assets/public/icons/burger_icon.svg' ?>" alt="иконка меню">
              <p>Каталог товаров</p>
            </a>
        </div>
        <div class="top_content__search">
          <input type="search" name="search" id="search" autocomplete='off' placeholder="Поиск по магазину">
        </div>
        <div class="top_content__callback">
          <a href="tel:+77053119603" class='phone_number'>+7 (705) 311-96-03</a>
          <a href="#" class="order_callback">Заказать обратный звонок</a>
        </div>
        <div class="top_content__controlls">
          <a href="#" class="top_content__controlls__item">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/icons/user_icon.svg' ?>" alt="иконка пользователя">
            <p>Войти</p>
          </a>
          <a href="#" class="top_content__controlls__item">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/icons/heart_icon.svg' ?>" alt="икона сердечка">
            <p>Избранное</p>
          </a>
          <a href="<?php echo home_url() . '/cart' ?>" class="top_content__controlls__item">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/icons/cart_icon.svg' ?>" alt="иконка корзины">
            <p>Корзина</p>
          </a>
        </div>
      </div>
    </div>    
  </header>