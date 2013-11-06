<?php get_header(); the_post(); ?>

	<div class="single_header carrito">
		<h2><?php _e('Carrito de compras', 'alias'); ?></h2>
		<h3 class="categoria_carrito"><?php _e('productos', 'alias'); ?></h3>
	</div><!-- single_header -->

	<div class="clear"></div>

	<?php $productos = ShopingCart::get_productos(); ?>

	<?php if ( $productos AND $productos->have_posts() ) : ?>

		<div class="carrito_content single_content">

		<?php while( $productos->have_posts() ) : $productos->the_post(); ?>

			<?php $meta = get_post_meta($post->ID, '_libro_meta', true);

				$numero         = isset($meta['numero'])         ? $meta['numero']         : '';
				$encuadernacion = isset($meta['encuadernacion']) ? $meta['encuadernacion'] : '';
				$size           = isset($meta['size'])           ? $meta['size']           : '';
				$paginas        = isset($meta['paginas'])        ? $meta['paginas']        : '';
				$pasta          = isset($meta['pasta'])          ? $meta['pasta']          : '';
				$isbn           = isset($meta['isbn'])           ? $meta['isbn']           : ''; ?>

			<div class="producto">

					<div class="imagen_producto">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('rectangulo') ?>
					</a>
				</div><!-- imagen_producto -->

				<div class="info_producto">

					<span class="numero"><?php echo $numero; ?></span>
					<h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>

					<div class="caracteristicas_producto">
						<p><?php
							echo $encuadernacion . '<br />';
							echo $size           . '<br />';
							echo $paginas        . '<br />';
							echo $pasta          . '<br />';
							echo $isbn           . '<br />'; ?>
						</p>
					</div><!-- caracteristicas_producto -->

				</div><!-- info_producto -->

				<div class="detalles_producto">

					<div class="left">
						<p><?php _e('Precio', 'alias'); ?></p>

						<?php
						$precio  = get_post_meta($post->ID, '_precio_meta', true);
						$pesos   = isset($precio['pesos'])   ? $precio['pesos']   : '';
						$dolares = isset($precio['dolares']) ? $precio['dolares'] : '';
						$euros   = isset($precio['euros'])   ? $precio['euros']   : ''; ?>

						<select name="currency" class="currency select-currency">
							<option data-lc="MX" value="MXN">mxn $ <?php echo $pesos ?></option>
							<option data-lc="US" value="USD">usd $<?php echo $dolares ?></option>
							<option data-lc="GB" value="EURO">euro €<?php echo $euros ?></option>
						</select>

					</div><!-- left -->

					<div class="right">
						<p><?php _e('Cantidad', 'alias'); ?></p>
						<div class="cantidad">
							<p><?php echo ShopingCart::get_product_quantity($post->ID); ?></p>
						</div>
					</div><!-- right -->

				</div><!-- detalles_producto -->

			</div><!-- producto -->

		<?php endwhile; ?>

		</div><!-- carrito_content -->


	<?php else : ?>

		<h3><?php _e('Su carrito esta vacío.', 'alias'); ?></h3>

	<?php endif; wp_reset_query(); ?>


	<div class="clear"></div>


	<?php if( $productos ) : ?>


		<div class="carrito_total">

			<!-- fedex embed code -->

			<div class="detalles_producto">

				<div class="elemento_carrito_total subtotal">
					<p class="titulo_detalles_producto left"><?php _e('Subtotal', 'alias'); ?></p>
					<ul class="left">
						<li class="moneda MXN">mxn $</li> <li class="precio MXN"><?php echo $pesos; ?></li>
						<li class="moneda USD">usd $</li> <li class="precio USD"><?php echo $dolares; ?></li>
						<li class="moneda EURO">eur €</li> <li class="precio EURO"><?php echo $euros; ?></li>
					</ul>
					<hr>
				</div><!-- elemento_carrito_total -->

				<!--
				<div class="elemento_carrito_total subtotal">
					<p class="titulo_detalles_producto left">
						<?php _e('Envío', 'alias'); ?>
					</p>
					<hr>
				</div>
				-->

				<div class="elemento_carrito_total subtotal">
					<p class="titulo_detalles_producto left"><?php _e('Total', 'alias'); ?></p>
					<ul class="left">
						<li class="moneda MXN">mxn $</li><li class="precio MXN">200.00</li>
						<li class="moneda USD">usd $</li><li class="precio USD">16.00</li>
						<li class="moneda EURO">eur €</li><li class="precio EURO">12.00</li>
					</ul>
					<hr>
				</div><!-- elemento_carrito_total -->

				<button id="comprar"><?php _e('Realizar compra', 'alias'); ?></button>

			</div><!-- detalles_producto -->

		</div><!-- carrito_total -->

		<?php get_template_part( 'templates/carrito', 'registro' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>