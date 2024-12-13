<?php get_header(); ?>
<header class="top_slider section" id="top_slider">
		<div class="section__content owl-carousel owl-slider">
        <?php
          $args = array(
              'post_type'      => 'slider',
              'posts_per_page' => -1, // Вывести все записи типа "slider"
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
                $url = get_permalink();

                ?>
                <div class="top_slider__content" style='background-image: url(<?= $image_path ?>);'>
                  
                  <div class="top_slider__text">
                    <h2 class='main_text'>
                      <?= $title ?>
                    </h2>
                    <h3 class="title_text">
                      <?= $content ?>
                    </h3>
                    <div class="button_box">
                      <a href="<?= $url ?>" class="button">
                        Узнать больше
                      </a>
                    </div>
                  </div>
                </div>
              <?php
              }
              wp_reset_postdata();
            } else {
              echo 'Слайды не найдены.';
            }
          ?>
    </div>
</header>
<section class="advantage section" id="advantage">
		<div class="section__content">
      <div class="advantage__items">
        <?php 
            $args = array(
              'post_type'      => 'advantage',
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
                <div class="advantage__items__item">
                  <img src="<?= $image_path ?>" alt="иконка">
                  <h4><?= $title ?></h4>
                  <p><?= $content ?></p>
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
<section class="manufacturers section" id="manufacturers">
  <div class="section__content">
    <div class="manufacturers__main_text">
      <h4>
        Производители
      </h4>  
    </div>
    <div  class="manufacturers__items">
    <?php
    $parent_category_slug = 'manufacturers'; // Замените 'parent-category-slug' на слаг (slug) родительской категории

    $args = array(
        'taxonomy'     => 'product_cat', // Таксономия категорий товаров
        'orderby'      => 'name',
        'parent'       => get_term_by( 'slug', $parent_category_slug, 'product_cat' )->term_id, // Получение ID родительской категории по слагу
        'hide_empty'   => 0, // Показывать пустые категории
    );

    $subcategories = get_terms( $args );

    foreach ( $subcategories as $subcategory ) {
      ?>
        <a href="<?= get_term_link( $subcategory ) ?>" class="manufacturers__items__item">
          <?php
            $thumbnail_id = get_term_meta( $subcategory->term_id, 'thumbnail_id', true ); // Получение ID изображения подкатегории

        if ( $thumbnail_id ) {
            $image = wp_get_attachment_image( $thumbnail_id, 'thumbnail' ); // Замените 'thumbnail' на размер изображения, который вам нужен
            echo $image;
        }}
        ?>
        </a>
    </div>
  </div>
</section>
<section class="news section" id="news">
  <div class="section__content">
    <div class="news__main_text">
      <h4>
        Блог
      </h4>
      <a href="<?php echo home_url() . '/blog' ?>" class="button">Смотреть все</a>
    </div>
    <div class="news__items">
    <?php
    $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
    );

    $recent_posts = get_posts($args);

    foreach ($recent_posts as $post) :
        setup_postdata($post);
        ?>
    <a href='<?php the_permalink(); ?>' class="news__items__item">
      <div class="news__items__img">
          <div class="label">
              <?php
              $categories = get_the_category();
              if ($categories) {
                  foreach ($categories as $category) {
                      echo '<span class="label_' . esc_html($category->slug) . '">' . esc_html($category->name) . '</span>';
                  }
              }
              ?>
          </div>
          <?php the_post_thumbnail(); ?>
      </div>
      <div class="news__items__texts">
          <p class="news__items__date">
              <?php echo get_the_date(); ?>
          </p>
          <h3 class="news__items__main_text">
              <?php the_title(); ?>
          </h3>
          <div class="news__items__title_text">
              <?php the_excerpt(); ?>
          </div>
      </div>
    </a>
    <?php
      endforeach;
      wp_reset_postdata();
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

<?php get_footer(); ?>