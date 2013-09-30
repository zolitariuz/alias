<?php get_header() ?>

	<div class="home_slider cycle-slideshow" data-cycle-slides="div" data-cycle-fx="scrollHorz">

		<?php

		$query = new WP_Query(array(
			'posts_per_page' => 5,
			'post_type'      => 'noticia'
		));

		if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="home_slide">

				<?php the_post_thumbnail( 'slider' ); ?>

				<p><span><?php the_title( ); ?></span> <?php subtitulo_noticia($post->ID); ?></p>

			</div><!-- home_slide -->

		<?php endwhile; endif; wp_reset_query(); ?>

	</div><!-- slider_home -->

<?php get_footer() ?>