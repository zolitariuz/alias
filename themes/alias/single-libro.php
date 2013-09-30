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
			<?php the_content() ?>
		</div><!-- content -->

		<div class="info_single">

			<?php
			$precios = get_post_meta($post->ID, '_precio_meta', true);
			$pesos   = isset($meta['pesos'])   ? $meta['pesos']   : '';
			$dolares = isset($meta['dolares']) ? $meta['dolares'] : '';
			$euros   = isset($meta['euros'])   ? $meta['euros']   : ''; ?>

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

<?php get_footer(); ?>