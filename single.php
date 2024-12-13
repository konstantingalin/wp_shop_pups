<?php get_header() ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="post_page section" id="post_page">
    <div class="section__content">
			<div class="shop__breadcrumb">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			<div class="post_page__content">
				<div class="post_page__left top_article">
					<?php if(has_post_thumbnail()):?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="https://picsum.photos/1000/1000" alt="Картинка поста">
					<?php endif; ?>
					<div class="post_date">
						<?php 
							echo get_the_date();
						?>
					</div>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="hashtags">
						<?php
							$posttags = get_the_tags();
							if ( $posttags ) {
								foreach( $posttags as $tag ) {
									echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
								}
							}
						?>
					</div>
					<div class="comments">
						<?php
							if(comments_open() || get_comments_number()){
								comments_template();	
							}
						?>
					</div>
				</div>
				<div class="post_page__right">
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
					<?php endwhile; else: ?>
							Записей нет.
						<?php endif; ?>
				</div>
			</div>
		</div>

		</section>

<?php get_footer() ?>