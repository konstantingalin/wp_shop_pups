<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'recommendation__items__item', $product ); ?>>
	<div class="recommendation__items__item__content">
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
	?>
	<div class="recommendation__items__item__img_box">
	<?php 
		/**
		 * Hook: woocommerce_before_shop_loop_item_title.
		 *
		 * @hooked woocommerce_show_product_loop_sale_flash - 10
		 * @hooked woocommerce_template_loop_product_thumbnail - 10
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		<div class="label"></div>
	</div> <!-- закрытие recommendation__items__item__img_box --> 
	<div class="recommendation__items__item__info">
		<div class="recommendation__items__item__rating">
			<?php 
				woocommerce_template_loop_rating();
					if ( $rating_cnt = $product->get_rating_count() ) {
							echo '<span class="woostudy-rating-count"> <small>' . $rating_cnt . ' отзывов</small> </span>';
					} else {
						echo '<span class="woostudy-rating-not"> <small>' . $rating_cnt . ' отзывов</small> </span>';
					}
			?>
		</div>
	<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );
	
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
	?> 			
		<div class="product_availability">
			<?php 
					if (get_post_meta(get_the_ID(), '_stock_status', true) == 'outofstock') {
					echo '<p class="outofstock">Нет в наличии</p>';
				} else if(get_post_meta(get_the_ID(), '_stock_status', true) == 'instock') {
					echo '<p class="stock">В наличии</p>';
				} else {
					echo '<p class="onrequest">Под заказ</p>';
				}
			?>
		</div>
	<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
		</div> <!-- закрытие recommendation__items__item__info --> 
	</div>
</div>
