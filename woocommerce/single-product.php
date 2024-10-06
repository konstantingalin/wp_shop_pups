<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly
// }

get_header( 'shop' ); ?>
<section class="product section" id="product">
  		<div class="section__content">
			<div class="product__breadcrumb">
				<?php woocommerce_breadcrumb(); ?>
			</div>
			<?php do_action( 'woocommerce_before_main_content' ); ?>


			<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>


			<?php do_action( 'woocommerce_after_main_content' ); ?>
			<?php do_action( 'woocommerce_sidebar' ); ?>
			</div>
	</div>
	</section>
	<section class="delivery section" id="delivery">
  <div class="section__content">
    <div  class="delivery__content">
      <?php 
            $args = array(
              'post_type'      => 'banner',
              'posts_per_page' => -1,
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();

                $title     = get_the_title();
                $content   = get_the_content();
                $thumbnail = get_the_post_thumbnail();
                $thumbnail_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src( $thumbnail_id, 'full' );
                $image_path = $image_url[0];

                ?>
                <div class="delivery__content__img">
                  <img src="<?= $image_path ?>" alt="картинка баннера">
                </div>
                <div class="delivery__content__texts">
                  <h3 class="main_text">
                    <?= $title ?>
                  </h3>
                  <div class="title_text">
                    <?= $content ?>
                  </div>
                </div>
              <?php
              }
              wp_reset_postdata();
            } else {
              echo 'Преимущества не найдены.';
            }
        ?>
    </div>
  </div>
</section>
	<?php 
 $recently_viewed = do_shortcode('[wrvp_recently_viewed_products]');
if (!empty($recently_viewed)) { ?>
<section class="recommendation recommendation2 section" id="recommendation">
		<div class="section__content">
      <p class="recommendation__main_text recommendation__main_text">
        Недавно просматривали
      </p>
      <div class="recommendation__items">
        <?php
        echo do_shortcode('[wrvp_recently_viewed_products]');
        ?>
      </div>
    </div>
</section> <?php }?>
<?php
get_footer( 'shop' );
return;

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
