<?php get_header(); the_post();

	$meta   = get_post_meta($post->ID, '_libro_meta', true);
	$numero = isset($meta['numero']) ? $meta['numero'] : '';
	$precio = isset($meta['precio']) ? $meta['precio'] : '';
	$link   = isset($meta['link'])   ? $meta['link']   : ''; ?>

	<div class="single_header">
		<p><?php echo $numero; ?></p>
		<h2><?php the_title() ?></h2>
		<h3 class="subtitulo"><?php print_the_terms($post->ID, 'autor'); ?></h3>
	</div><!-- single_header -->

	<div class="single_content">

		<div class="portada">

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('rectangulo');
			} else {
				echo "<img src='http://placehold.it/180X275'>";
			} ?>

			<p><a href="<?php echo $link; ?>">Hojear esta publicación</a></p>

		</div><!-- portada -->

		<div class="content">
			<?php the_content() ?>
		</div><!-- content -->

		<div class="info_single">
			<ul class="precios">
				<li> <span class="curr">mxn $</span> <span class="amount">200.00</span> </li>
				<li> <span class="curr">usd $</span> <span class="amount">16.00</span> </li>
				<li> <span class="curr">eur €</span> <span class="amount">6.00</span> </li>
			</ul><!-- precios -->

			<hr>

			<ul class="caracteristicas">
				<li>
					<p>
						<strong>pasta</strong>
						<br />
						rústica
					</p>
				</li>
				<li>
					<p>
						<strong>idioma</strong>
						<br />
						español
					</p>
				</li>
				<li>
					<p>
						<strong>dimensiones</strong>
						<br />
						14 x 21 cm
					</p>
				</li>
				<li>
					<p>
						<strong>número de páginas</strong>
						<br />
						406
					</p>
				</li>
				<li>
					<p>
						<strong>encuadernación</strong>
						<br />
						cosido y pegado
					</p>
				</li>
				<li>
					<p>
						<strong>ISBN</strong>
						<br />
						978-607-461-110-6
					</p>
				</li>
			</ul><!-- caracteristicas -->

			<hr>

			<button class="newsletter borde_gris sidebar_elemento boton_negro">
				<p>Comprar ahora</p>
			</button><!-- newsletter -->

			<button class="anadir newsletter borde_gris sidebar_elemento">
				<span class="carrito_img"></span>
				<p>Añadir al carrito</p>
			</button><!-- newsletter -->

		</div><!-- info_single -->

	</div><!-- single_content -->

<?php get_footer(); ?>