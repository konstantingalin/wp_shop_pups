<?php

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_footer', 'theme_scripts');
add_action('after_setup_theme', 'pups_setup');

function theme_styles() {
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/sass/index.css');
}

function theme_scripts() {
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/index.js');
}

function pups_setup() {
  add_theme_support( 'woocommerce' );
  add_theme_support( 'post-thumbnail' );
  add_theme_support( 'title-tag' );

  register_nav_menus ( 
    array(
      'top-menu' => 'top_menu__top_bar',
      'bottom-menu-1' => 'bottom_menu__menu_1',
      'bottom-menu-2' => 'bottom_menu__menu_2',
      'bottom-menu-3' => 'bottom_menu__menu_3',
      'bottom-menu-4' => 'bottom_menu__menu_4',
    )
  );
}

function pups_widgets_init() {
	register_sidebar(
		array(
			'name' => esc_html__( 'Sidebar', 'pups' ),
			'id' => 'sidebar-1',
			'description' => esc_html__( 'Add widgets here.', 'pups' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
		)
	);
}
add_action( 'widgets_init', 'pups_widgets_init' );

add_action('woocommerce_single_product_custom', 'display_product_category_custom');

function display_product_category_custom() {
    global $product;

    $categories = wc_get_product_category_list( $product->get_id(), ', ' );
    
    if ( $categories ) {
        echo '<div class="custom-product-categories"><strong>Категория: </strong>' . $categories . '</div>';
    }
}

add_action('woocommerce_custom_display_attribute', 'display_product_size_attribute');

function display_product_size_attribute() {
  global $product;

  // Получаем все атрибуты товара
  $attributes = $product->get_attributes();

  // Проверяем, существует ли атрибут 'pa_size' (измените на ваш слуг, если нужно)
  if (isset($attributes['pa_size'])) {
      // Получаем все значения (ID терминов) для атрибута 'pa_size'
      $terms = wc_get_product_terms( $product->get_id(), 'pa_size', array( 'fields' => 'names' ) );

      // Если есть значения, выводим их
      if (!empty($terms)) {
          echo '<div class="product-size"><strong>Размер: </strong><span>' . implode(', ', $terms) . '</span></div>';
      }
  }
}

function custom_cross_sell_shortcode( $atts ) {
  ob_start();

  // Аргументы по умолчанию.
  $atts = shortcode_atts(
      array(
          'posts_per_page' => 4, // Количество товаров
          'columns' => 4, // Количество колонок
      ), $atts, 'cross_sell_products'
  );

  // Используем стандартную функцию для вывода кросс-сейлов.
  woocommerce_cross_sell_display( $atts['posts_per_page'], $atts['columns'] );

  return ob_get_clean();
}
add_shortcode( 'cross_sell_products', 'custom_cross_sell_shortcode' );


require_once get_template_directory() . '/inc/woocommerce-hooks.php';
require_once get_template_directory() . '/inc/cpt.php';

