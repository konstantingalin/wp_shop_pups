<?php
	defined( 'ABSPATH' ) || exit;
	global $product;


?>
	<div class="product__content">
		<?php  
			/**
			 * Hook: woocommerce_before_single_product.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 */
			do_action( 'woocommerce_before_single_product' );
		?>
		<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product__card', $product ); ?>>
		<div class="product__card__content">
			<div class="product__card__content__left">
				<div class="owl-carousel owl-product-img">
					<?php 
						$product_img_id = $product->get_image_id();
						if($product_img_id) {
							$main_img = wp_get_attachment_image_url($product_img_id, 'full');
						} else {
							$main_img  = wc_placeholder_img_src('full');
						}
						$product_img_ids = $product->get_gallery_image_ids();
					?>
					<div>
						<img src="<?php echo $main_img; ?>" alt="image">
					</div>
					<?php if ($product_img_ids) : ?>
						<?php foreach ($product_img_ids as $product_img_id) : ?>
							<div>
								<img src="<?php echo wp_get_attachment_image_url($product_img_id, 'full'); ?>" alt="image">
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="product__card__content__right">
				<div class="top_info">
					<div class="top_info__item">
						<?php woocommerce_show_product_sale_flash(); ?>
					</div>
					<div class="top_info__item product_availability">
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
					<?php if (woocommerce_template_single_rating()) : ?>
						<div class='top_info__item'>
						
							<p class='rate_p'>Рейтинг:</p>
							<?php woocommerce_template_single_rating(); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php woocommerce_template_single_title(); ?>
				<?php woocommerce_template_single_excerpt(); ?>
				<?php do_action('woocommerce_single_product_custom'); ?>
				<div class="price_box">
					<div class="price_box__item">
						<?php woocommerce_template_single_price(); ?>
					</div>
				</div>
				<div class="buy_box">
					<div class="buy_box__item">
						<?php woocommerce_template_single_add_to_cart(); ?>	
					</div>
				</div>
			</div>
		</div>
		<?php woocommerce_output_related_products(); ?>
		<?php do_action( 'woocommerce_after_single_product_summary' ); ?>
		</div>
	</div>
<?php

return;
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */

?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
--------------------



<?php

return;
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
