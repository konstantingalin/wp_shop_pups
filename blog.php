<?php
/*
Template Name: blog
*/
get_header(); 
?>

<section class="news_page section" id="news_page">
    <div class="section__content">
        <div class="shop__breadcrumb">
			<?php woocommerce_breadcrumb(); ?>
		</div>
        <div class="news_page__content">
            <div class="news_page__left">
            <?php
                $args = array(
     
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
            <div class="news_page__right">
                <aside>
                    <div class="genre_sidebar">
                        <h2>Рубрики</h2>
                        <ul>
                            <?php
                                $genre = get_categories();
                                if ( $genre ) {
                                    foreach( $genre as $link ) {
                                        echo '<li><a href="' . get_category_link($link->term_id) . '">' . $link->name . '<span> ' . $link->category_count . '</span></a></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="archivieren">
                        <h2>Архив публикаций</h2>
                        <ul>
                            <?php
                                $str = '<li>'. wp_get_archives('echo=0&show_post_count=1') .'</li>';
                                $str = str_replace('(','', $str);
                                $str = str_replace(')','', $str);
                                echo $str;
                            ?>
                        </ul>
                    </div>
                    <div class="hashtags_sidebar">
                        <h2>Популярные метки</h2>
                        <ul>
                            <?php
                                $posttags = get_tags();
                                if ( $posttags ) {
                                    foreach( $posttags as $tag ) {
                                        echo '<li><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>