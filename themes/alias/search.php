<?php get_header() ?>

	<?php global $wp_query; ?>

	<div class="single_header">
		<p><?php echo $wp_query->post_count; _e(' resultado para', 'alias'); ?>:</p>
		<h3 class="subtitulo">"<?php echo $wp_query->query['s'] ?>"</h3>
	</div><!-- single_header -->

	<?php if( have_posts() ) : while ( have_posts() ) : the_post();

		$meta   = get_post_meta($post->ID, '_libro_meta', true);
		$numero = isset($meta['numero']) ? $meta['numero'] : '';
		$precio = isset($meta['precio']) ? $meta['precio'] : '';
		$link   = isset($meta['link'])   ? $meta['link']   : '';

		?>

		<div class="resultado_busqueda">
			<div class="portada">
				<?php the_post_thumbnail('rectangulo'); ?>
			</div><!-- portada -->

			<div class="info_resultado_busqueda">
				<p class="titulo"> <span> <?php echo $numero; ?> </span> <?php the_title(); echo ', '; print_the_terms($post->ID, 'autor'); ?> </p>

				<div class="excerpt_resultado_busqueda">
					<?php the_excerpt(); ?>
				</div><!-- excerpt_resultado_busqueda -->

			</div><!-- info_resultado_busqueda -->

		</div><!-- resultado_busqueda -->

	<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer() ?>