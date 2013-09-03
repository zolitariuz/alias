<?php
get_header();
$template_url = get_bloginfo( 'template_url' );
the_post();
?>

	<div class="single_header carrito">
		<h2>Carrito de Compras</h2>
		<h3 class="categoria_carrito">productos</h3>
	</div><!-- single_header -->

	<div class="carrito_content">

		<div class="producto">

			<div class="imagen_producto">
				<img src="<?php echo $template_url; ?>/images/libro.jpg" >
			</div><!-- imagen_producto -->

			<div class="info_producto">
				<span class="numero">16</span><h3> Campos de acción: entre el performance y el objeto, 1949-1979</h3>

				<div class="caracteristicas_producto">
					<p>
						3 volúmenes<br />
						rústica<br />
						español<br />
						14 x 21 cm<br />
						406 pp.<br />
						cosido y pegado<br />
						978-607-461-110-6<br />
					</p>
				</div><!-- caracteristicas_producto -->

			</div><!-- info_producto -->

		</div><!-- producto -->

		<div class="producto">

			<div class="imagen_producto">
				<img src="<?php echo $template_url; ?>/images/libro.jpg" >
			</div><!-- imagen_producto -->

			<div class="info_producto">
				<span class="numero">16</span><h3> Campos de acción: entre el performance y el objeto, 1949-1979</h3>

				<div class="caracteristicas_producto">
					<p>
						3 volúmenes<br />
						rústica<br />
						español<br />
						14 x 21 cm<br />
						406 pp.<br />
						cosido y pegado<br />
						978-607-461-110-6<br />
					</p>
				</div><!-- caracteristicas_producto -->

			</div><!-- info_producto -->

		</div><!-- producto -->

		<div class="producto">

			<div class="imagen_producto">
				<img src="<?php echo $template_url; ?>/images/libro.jpg" >
			</div><!-- imagen_producto -->

			<div class="info_producto">
				<span class="numero">16</span><h3> Campos de acción: entre el performance y el objeto, 1949-1979</h3>

				<div class="caracteristicas_producto">
					<p>
						3 volúmenes<br />
						rústica<br />
						español<br />
						14 x 21 cm<br />
						406 pp.<br />
						cosido y pegado<br />
						978-607-461-110-6<br />
					</p>
				</div><!-- caracteristicas_producto -->

			</div><!-- info_producto -->

		</div><!-- producto -->

		<div class="producto">

			<div class="imagen_producto">
				<img src="<?php echo $template_url; ?>/images/libro.jpg" >
			</div><!-- imagen_producto -->

			<div class="info_producto">
				<span class="numero">16</span><h3> Campos de acción: entre el performance y el objeto, 1949-1979</h3>

				<div class="caracteristicas_producto">
					<p>
						3 volúmenes<br />
						rústica<br />
						español<br />
						14 x 21 cm<br />
						406 pp.<br />
						cosido y pegado<br />
						978-607-461-110-6<br />
					</p>
				</div><!-- caracteristicas_producto -->

			</div><!-- info_producto -->

		</div><!-- producto -->

	</div><!-- single_content -->

<?php get_footer(); ?>