<?php

	$librerias = new WP_Query(array(
		'post_type'     => 'distribuidor',
		'posts_per_page' => -1
	)); ?>

	<div class="librerias">
		<ul>
			<?php if ( $librerias->have_posts() ) : while ( $librerias->have_posts() ) : $librerias->the_post(); ?>
				<li>
					<?php $link = get_post_meta( $post->ID, '_distribuidor_link', true ); ?>
					<a href="<?php echo $link ?>" target="_blank" rel="nofollow">
						<?php the_title() ?>
						<?php if( ! is_last_post($librerias)) echo '<li>·</li>'; ?>
					</a>
				</li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div><!-- librerias -->