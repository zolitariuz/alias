<?php get_header() ?>

	<div class="home_slider cycle-slideshow" data-cycle-slides="div" data-cycle-fx="scrollHorz">

		<?php
		$args = array(
			'posts_per_page' => 5,
			'post_type' => 'noticia'
		);
		query_posts( $args );
		while ( have_posts() ) : the_post(); ?>

			<div class="home_slide">

				<?php the_post_thumbnail( 'slider' ); ?>
				<p><span>Robert Smithson</span>  Hotel Palenque</p>

			</div><!-- home_slide -->

		<?php endwhile; ?>

	</div><!-- slider_home -->

<?php get_footer() ?>