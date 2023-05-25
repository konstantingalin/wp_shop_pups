<?php

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

add_filter('woocommerce_sale_flash', 'vs_change_sale_content', 10, 3);
 
function vs_change_sale_content($content, $post, $product){
 
   $content = '<span class="onsale">'.__( 'Акция', 'woocommerce' ).'</span>';
 
   return $content;
}