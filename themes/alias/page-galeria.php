<style>
	iframe{ width: 181px; height: auto; }
	.ver-entrada{ color: #999; text-decoration: none; }
	.ver-entrada:hover{ color: #333; }
</style>

<?php

	get_header();

	$query = new WP_Query(array(
		'post_status'    => 'publish',
		'post_type'      => 'libro',
		'posts_per_page' => -1,
		'post_parent'    => 0
	));


	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();


	// IMAGENES ///////////////////////////////////////////


		$images = get_post_content_images($post->ID);

		foreach ($images as $image) : ?>

			<div class="libro fotografias">

				<?php $image_attributes = wp_get_attachment_image_src($image->ID, 'cuadrado'); ?>

				<a class="fancybox" rel="<?php echo $post->post_name; ?>" href="<?php echo $image->url; ?>">
					<img src="<?php echo $image_attributes[0]; ?>"/>
				</a>

				<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

				<p class="descripcion">
					<?php echo $image->caption; ?>
				</p>
				<a class="ver-entrada" href="<?php the_permalink(); ?>"><?php _e('Ver libro', 'alias'); ?> »</a>

			</div>

		<?php endforeach;


	// VIDEOS ////////////////////////////////////////////


		$videoSearchPattern = '/<iframe src="\/\/player.vimeo.*?\/iframe>/';

		preg_match_all( $videoSearchPattern, $post->post_content, $videos );

		while( $video = array_pop($videos[0]) ){


			preg_match('/src="([^"]+)"/', $video, $match);
			$url = $match[1]; ?>

			<div class="libro videos">

				<a class="various fancybox.iframe" href="http:<?php echo $url ?>">
					<?php echo $video ?>
				</a>

				<div class="iframe-overlay"></div>

				<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

				<p class="descripcion">
					<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
				</p>

				<a class="ver-entrada" href="<?php the_permalink(); ?>"><?php _e('Ver libro', 'alias'); ?> »</a>

			</div><!-- libro -->

			<?php
		}


	// AUDIO ////////////////////////////////////////////

		$soundclouds = get_post_meta($post->ID, '_soundcloud_meta', true);

		if ( $soundclouds ) : $soundcloudIndex = 0; foreach ($soundclouds as $soundcloud) :

			if ( ! empty($soundcloud)) {

				echo $soundcloud;
				$soundcloudIndex++; ?>


				<div class="audio-galeria libro">

					<div class="audio play" data-index="<?php echo $soundcloudIndex; ?>">
						<div class="audio_status"></div>
						<p>Repdroducir audio</p>
					</div><!-- play -->

					<div class="audio pause" style="display: none;" data-index="<?php echo $soundcloudIndex; ?>">
						<div class="audio_status"></div>
						<p>Pausar audio</p>
					</div><!-- pause -->

					<br/>

					<p class="numero"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

					<a class="ver-entrada" href="<?php the_permalink(); ?>"><?php _e('Ver libro', 'alias'); ?> »</a>

				</div><!-- audio-galeria -->

			<?php }

		endforeach; endif;

	endwhile; endif; wp_reset_postdata();


get_footer();