<?php

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

add_filter('woocommerce_sale_flash', 'vs_change_sale_content', 10, 3);
 
function vs_change_sale_content($content, $post, $product){
 
   $content = '<span class="onsale">'.__( 'Акция', 'woocommerce' ).'</span>';
 
   return $content;
}

 
add_filter( 'woocommerce_get_script_data', 'change_view_cart', 10, 2 );

function change_view_cart( $params, $handle ) {
  if ( $handle == 'wc-add-to-cart' ) {
    $params['i18n_view_cart'] = "Добавлено в корзину";
  }
  
  return $params;
}
// add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
// function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
//  	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
//  		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
//  		$html .= woocommerce_quantity_input( array(), $product, false );
//  		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
//  		$html .= '</form>';
//  	}
//  	return $html;
// }

// Хлебные крошки 

 remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20 );

 add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '<span> / </span>',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}