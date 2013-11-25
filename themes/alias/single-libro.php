<?php get_header(); the_post();

	$meta   = get_post_meta($post->ID, '_libro_meta', true);
	$numero = isset($meta['numero']) ? $meta['numero'] : '';
	$link   = isset($meta['link'])   ? $meta['link']   : ''; ?>

	<div class="single_header">
		<p><?php echo $numero; ?></p>
		<h2><?php the_title(); ?></h2>
		<h3 class="subtitulo"><?php print_the_terms($post->ID, 'autor'); ?></h3>
	</div><!-- single_header -->


	<div class="single_content">

		<div class="portada">

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('rectangulo');
			} else {
				echo "<img src='http://placehold.it/180X275'>";
			} ?>

			<p>
				<a  target="_blank" href="<?php echo $link; ?>" >
					<?php _e('Hojear esta publicación', 'alias'); ?>
				</a>
			</p>

		</div><!-- portada -->

		<div class="content">
			<?php the_content(); ?>

			<?php $soundclouds = get_post_meta($post->ID, '_soundcloud_meta', true); ?>

			<?php if ( $soundclouds ) : $soundcloudIndex = 0; foreach ($soundclouds as $soundcloud) :

				if ( ! empty($soundcloud)){
					echo $soundcloud; $soundcloudIndex++; ?>

					<div class="audio play" data-index="<?php echo $soundcloudIndex; ?>">
						<div class="audio_status"></div>
						<p>Repdroducir audio</p>
					</div><!-- audio -->

					<div class="audio pause" style="display: none;" data-index="<?php echo $soundcloudIndex; ?>">
						<div class="audio_status"></div>
						<p>Pausar audio</p>
					</div><!-- audio -->
				<?php } ?>

			<?php endforeach; endif; wp_reset_postdata(); ?>

			<!-- colección -->
			<div class="coleccion">
				<?php collection_posts($post->ID); ?>
			</div>

		</div><!-- content -->

		<div class="info_single">

			<?php
			$precio  = get_post_meta($post->ID, '_precio_meta', true);
			$pesos   = isset($precio['pesos'])   ? $precio['pesos']   : '';
			$dolares = isset($precio['dolares']) ? $precio['dolares'] : '';
			$euros   = isset($precio['euros'])   ? $precio['euros']   : ''; ?>

			<ul class="precios">
				<li> <span class="curr">mxn $</span> <span class="amount"><?php echo $pesos; ?></span> </li>
				<li> <span class="curr">usd $</span> <span class="amount"><?php echo $dolares; ?></span> </li>
				<li> <span class="curr">eur €</span> <span class="amount"><?php echo $euros; ?></span> </li>
			</ul><!-- precios -->


			<hr>


			<?php
				$encuadernacion = isset($meta['encuadernacion']) ? $meta['encuadernacion'] : '';
				$size           = isset($meta['size'])           ? $meta['size']           : '';
				$paginas        = isset($meta['paginas'])        ? $meta['paginas']        : '';
				$impresion      = isset($meta['impresion'])      ? $meta['impresion']      : '';
				$isbn           = isset($meta['isbn'])           ? $meta['isbn']           : ''; ?>

			<ul class="caracteristicas">

				<li><p><strong><?php _e('Idioma', 'alias'); ?></strong><br /><?php libro_idiomas($post->ID); ?></p></li>

				<li><p><strong><?php _e('Dimensiones', 'alias'); ?></strong><br /><?php echo $size; ?></p></li>

				<li><p><strong><?php _e('Número de páginas', 'alias'); ?></strong><br /><?php echo $paginas; ?></p></li>

				<li><p><strong><?php _e('Encuadernación', 'alias'); ?></strong><br /><?php echo $encuadernacion; ?></p></li>

				<li><p><strong><?php _e('Impresión', 'alias'); ?></strong><br /><?php echo $impresion; ?></p></li>

				<li><p><strong><?php _e('ISBN', 'alias'); ?></strong><br /><?php echo $isbn; ?></p></li>

			</ul><!-- caracteristicas -->


			<hr>


			<button id="buy_now" class="newsletter borde_gris sidebar_elemento boton_negro" data-post_id="<?php echo $post->ID; ?>">
				<p><?php _e('Comprar ahora', 'alias'); ?></p>
			</button><!-- newsletter -->

			<button id="add_to_cart" class="anadir newsletter borde_gris sidebar_elemento" data-post_id="<?php echo $post->ID; ?>">
				<span class="carrito_img"></span>
				<p><?php _e('Añadir al carrito', 'alias'); ?></p>
			</button><!-- newsletter -->

		</div><!-- info_single -->

	</div><!-- single_content -->



<?php
/*
	8888888b.          888          888                 888      8888888b.                   888
	888   Y88b         888          888                 888      888   Y88b                  888
	888    888         888          888                 888      888    888                  888
	888   d88P .d88b.  888  8888b.  888888 .d88b.   .d88888      888   d88P .d88b.  .d8888b  888888
	8888888P" d8P  Y8b 888     "88b 888   d8P  Y8b d88" 888      8888888P" d88""88b 88K      888
	888 T88b  88888888 888 .d888888 888   88888888 888  888      888       888  888 "Y8888b. 888
	888  T88b Y8b.     888 888  888 Y88b. Y8b.     Y88b 888      888       Y88..88P      X88 Y88b.
	888   T88b "Y8888  888 "Y888888  "Y888 "Y8888   "Y88888      888        "Y88P"   88888P'  "Y888
*/


	$related = get_related_post( $post->ID );

	if ( $related and $related->have_posts() ) : while ( $related->have_posts() ) : $related->the_post(); ?>

		<div class="single_header noticia">
			<h2><?php the_title() ?></h2>
			<h3 class="subtitulo"><?php subtitulo_noticia($post->ID) ?></h3>
		</div><!-- single_header -->

		<div class="single_content noticia">

			<div class="content">

				<?php the_content() ?>

				<?php $soundclouds = get_post_meta($post->ID, '_soundcloud_meta', true);?>

				<?php if ( $soundclouds ) :

				$soundcloudIndex = isset($soundcloudIndex) ? $soundcloudIndex : 0;

				foreach ($soundclouds as $soundcloud) :

					if ( ! empty($soundcloud)) {

						echo $soundcloud; $soundcloudIndex++; ?>

						<div class="audio play" data-index="<?php echo $soundcloudIndex; ?>">
							<div class="audio_status"></div>
							<p>Repdroducir audio</p>
						</div><!-- audio -->

						<div class="audio pause" style="display: none;" data-index="<?php echo $soundcloudIndex; ?>">
							<div class="audio_status"></div>
							<p>Pausar audio</p>
						</div><!-- audio -->

					<?php }

				endforeach; endif; ?>

			</div><!-- content -->

		</div><!-- single_content -->

	<?php endwhile; endif; wp_reset_query(); ?>


<?php get_footer(); ?>