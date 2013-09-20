<?php

	get_header();

		$wp_query = new WP_Query(array(
			'post_type'=> array( 'noticia', 'libro' )
		));

		if ( have_posts() ) : while ( have_posts() ) : the_post();

			$searchPattern = '~<img [^\>]*\ />~';

			preg_match_all( $searchPattern, $post->post_content, $images );

			while( $image = array_pop($images[0]) ){
				echo "<div class='galeria'>$image</div>";
			}

		endwhile; endif; wp_reset_query();


	get_footer();