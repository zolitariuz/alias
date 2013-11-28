
<style> iframe{ width: 181px; height: auto; } </style>

<?php

	get_header();


		$query = new WP_Query(array(
			'post_type'      => 'libro',
			'posts_per_page' => -1,
			'post_parent'    => 0
		));


		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();


		// IMAGENES ///////////////////////////////////////////

			if ( has_post_thumbnail() ) : ?>

				<div class="libro fotografias">

					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>

					<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

					<p class="descripcion">
						<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
					</p>

				</div><?php

			endif;


			$imageSearchPattern = '~<img [^\>]*\ />~';

			preg_match_all( $imageSearchPattern, $post->post_content, $images );

			while( $image = array_pop($images[0]) ){ ?>

				<div class="libro fotografias">

					<a href="<?php the_permalink() ?>"><?php echo $image ?></a>

					<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

					<p class="descripcion">
						<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
					</p>

				</div>

				<?php
			}


		// VIDEOS ////////////////////////////////////////////


			$videoSearchPattern = '/<iframe src="\/\/player.vimeo.*?\/iframe>/';

			preg_match_all( $videoSearchPattern, $post->post_content, $videos );

			while( $video = array_pop($videos[0]) ){ ?>


				<div class="libro videos">

					<a href="<?php the_permalink() ?>"><?php echo $video ?></a>

					<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

					<p class="descripcion">
						<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
					</p>

				</div><!-- libro -->

				<?php
			}


		// AUDIO ////////////////////////////////////////////

			$soundclouds = get_post_meta($post->ID, '_soundcloud_meta', true);

			if ( $soundclouds ) : $soundcloudIndex = 0; foreach ($soundclouds as $soundcloud) :

				if ( ! empty($soundcloud)) {

					echo $soundcloud;
					$soundcloudIndex++; ?>

					<div class="audio play" data-index="<?php echo $soundcloudIndex; ?>">
						<div class="audio_status"></div>
						<p>Repdroducir audio</p>
					</div><!-- audio -->

					<div class="audio pause" style="display: none;" data-index="<?php echo $soundcloudIndex; ?>">
						<div class="audio_status"></div>
						<p>Pausar audio</p>
					</div><!-- audio -->

				<?php }

			endforeach; endif;

		endwhile; endif; wp_reset_postdata();


		// VIDEOS ////////////////////////////////////////////

	get_footer();