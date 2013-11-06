<?php

	$librerias = new WP_Query(array(
		'post_type'      => 'distribuidor',
		'posts_per_page' => -1
	)); ?>

	<div class="librerias">
		<ul>
			<li><strong><?php _e('PUNTOS DE VENTA', 'alias'); ?></strong><li>·</li></li>

			<?php if ( $librerias->have_posts() ) : while ( $librerias->have_posts() ) : $librerias->the_post(); ?>
				<li>
					<?php $url_distribuidor = get_post_meta( $post->ID, '_distribuidor_link', true ); ?>
					<a href="<?php echo $url_distribuidor ?>" target="_blank" rel="nofollow" style="display:inline-block">
						<?php the_title() ?>

						<?php if( ! is_last_post($librerias)) echo '<li>·</li>'; ?>
					</a>
				</li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div><!-- librerias -->