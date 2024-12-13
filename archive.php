<?php
/*
Template Name: Новости
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
                <?php if ( have_posts() ) : ?>
                    
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <a href='<?php the_permalink(); ?>' class="news__items__item">
                            <div class="news__items__img">
                                <div class="label">
                                    <?php
                                    $categories = get_the_category();
                                    if ( $categories ) {
                                        foreach ( $categories as $category ) {
                                            echo '<span class="label_' . esc_html( $category->slug ) . '">' . esc_html( $category->name ) . '</span>';
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
                    endwhile;

                    the_posts_navigation(); // Добавляем навигацию для постов
                else :
                    ?>
                    <p><?php _e( 'Посты не найдены.', 'your-theme-textdomain' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="news_page__right">
                <aside>
                    <div class="genre_sidebar">
                        <h2>Рубрики</h2>
                        <ul>
                            <?php
                            $categories = get_categories();
                            if ( $categories ) {
                                foreach ( $categories as $category ) {
                                    echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '<span> ' . $category->count . '</span></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="archivieren">
                        <h2>Архив публикаций</h2>
                        <ul>
                            <?php
                            echo wp_get_archives( array( 'type' => 'monthly', 'show_post_count' => true ) );
                            ?>
                        </ul>
                    </div>
                    <div class="hashtags_sidebar">
                        <h2>Популярные метки</h2>
                        <ul>
                            <?php
                            $tags = get_tags();
                            if ( $tags ) {
                                foreach ( $tags as $tag ) {
                                    echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li>';
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
