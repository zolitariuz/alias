<?php

	get_header();

		$wp_query = new WP_Query(array(
			'post_type'=> array( 'noticia', 'libro' )
		));

		if ( have_posts() ) : while ( have_posts() ) : the_post();


		// IMAGENES ///////////////////////////////////////////


			$imageSearchPattern = '~<img [^\>]*\ />~';

			preg_match_all( $imageSearchPattern, $post->post_content, $images );

			while( $image = array_pop($images[0]) ){ ?>

				<div class="libro fotografias">

					<a href="<?php the_permalink() ?>"><?php echo $image ?></a>

					<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

					<p class="descripcion">
						<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
					</p>

				</div><!-- libro -->

				<?php
			}


		// VIDEOS ////////////////////////////////////////////


			$videoSearchPattern = '~<iframe [^\>]*\ />~';

			preg_match_all( $videoSearchPattern, $post->post_content, $videos );

			while( $video = array_pop($videos[0]) ){ ?>

				<div class="libro video">

					<a href="<?php the_permalink() ?>"><?php echo $video ?></a>

					<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

					<p class="descripcion">
						<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
					</p>

				</div><!-- libro -->

				<?php
			}

		endwhile; endif; wp_reset_query();


	get_footer();