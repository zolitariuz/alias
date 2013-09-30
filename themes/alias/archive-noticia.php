<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


		<div class="libro">

			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('cuadrado') ?></a>

			<p class="numero"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

			<p class="descripcion">
				<a href="<?php the_permalink() ?>"><?php subtitulo_noticia($post->ID) ?></a>
			</p>

		</div><!-- libro -->

	<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>