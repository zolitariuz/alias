<?php get_header(); ?>

	<?php if( have_posts() ) : while ( have_posts() ) : the_post();

		$meta   = get_post_meta($post->ID, '_libro_meta', true);
		$numero = isset($meta['numero']) ? $meta['numero'] : '';
		$precio = isset($meta['precio']) ? $meta['precio'] : '';
		$link   = isset($meta['link'])   ? $meta['link']   : ''; ?>

		<div class="libro">

			<a href="<?php the_permalink() ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('cuadrado');
				} else {
					echo "<img src='http://placehold.it/180X180'>";
				} ?>
			</a>

			<p class="numero"><a href="#"><?php echo $numero ?></a></p>

			<p class="descripcion"> <a href="#"> Campos de acción: entre el performance y el objeto, 1949-1979 </a> </p>

		</div><!-- libro -->

	<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer(); ?>