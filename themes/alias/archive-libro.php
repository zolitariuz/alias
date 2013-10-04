<?php get_header(); ?>



	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<?php $libro_meta = get_post_meta($post->ID, '_libro_meta', true); ?>

		<div class="libro <?php print_the_terms($post->ID, 'coleccion', ' ', 'slug') ?>">

			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('rectangulo') ?>
			</a>

			<p class="numero">
				<a href="<?php the_permalink() ?>">
					<?php echo isset($libro_meta['numero']) ? $libro_meta['numero'] : ''; ?>
				</a>
			</p>

			<p class="descripcion">
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</p>

		</div><!-- libro -->

	<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>