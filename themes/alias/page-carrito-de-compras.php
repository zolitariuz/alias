<?php get_header(); the_post(); ?>

	<div class="single_header carrito">
		<h2>Carrito de Compras</h2>
		<h3 class="categoria_carrito">productos</h3>
	</div><!-- single_header -->

	<div class="carrito_content">

		<div class="producto">

			<div class="imagen_producto">
				<img src="<?php echo THEMEPATH ?>/images/libro.jpg" >
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

			<div class="detalles_producto">

				<div class="left">
					<p>Precio</p>
					<ul>
						<li class="moneda">mxn $</li>
						<li class="precio">200.00</li>
						<li class="moneda">usd $</li>
						<li class="precio">16.00</li>
						<li class="moneda">eur €</li>
						<li class="precio">6.00</li>
					</ul>

				</div><!-- left -->

				<div class="right">
					<p>Cantidad</p>
					<div class="cantidad">
						<p>1</p>
					</div>
				</div><!-- right -->

			</div><!-- detalles_producto -->

		</div><!-- producto -->

		<div class="producto">

			<div class="imagen_producto">
				<img src="<?php echo THEMEPATH ?>/images/libro.jpg" >
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

			<div class="detalles_producto">

				<div class="left">
					<p>Precio</p>
					<ul>
						<li class="moneda">mxn $</li>
						<li class="precio">200.00</li>
						<li class="moneda">usd $</li>
						<li class="precio">16.00</li>
						<li class="moneda">eur €</li>
						<li class="precio">6.00</li>
					</ul>

				</div><!-- left -->

				<div class="right">
					<p>Cantidad</p>
					<div class="cantidad">
						<p>1</p>
					</div>
				</div><!-- right -->

			</div><!-- detalles_producto -->

		</div><!-- producto -->

	</div><!-- carrito_content -->

	<div class="carrito_total">

		<div class="detalles_producto">

			<div class="elemento_carrito_total subtotal">
				<p class="titulo_detalles_producto left">Subtotal</p>
				<ul class="left">
					<li class="moneda">mxn $</li>
					<li class="precio">200.00</li>
					<li class="moneda">usd $</li>
					<li class="precio">16.00</li>
					<li class="moneda">eur €</li>
					<li class="precio">6.00</li>
				</ul>
				<hr>
			</div><!-- elemento_carrito_total -->

			<div class="elemento_carrito_total subtotal">
				<p class="titulo_detalles_producto left">Envío</p>
				<ul class="left">
					<li class="selects">
						<select class="borde_gris" >
							<option value="">Selecciona tu país</option>
							<option value="mexico">México</option>
						</select>
						<select class="borde_gris" >
							<option value="">Estado</option>
							<option value="df">D.F.</option>
						</select>
						<input class="borde_gris" type="text" value="Código Postal" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					</li>
					<li class="moneda">mxn $</li>
					<li class="precio">200.00</li>
					<li class="moneda">usd $</li>
					<li class="precio">16.00</li>
					<li class="moneda">eur €</li>
					<li class="precio">6.00</li>
				</ul>
				<hr>
			</div><!-- elemento_carrito_total -->

			<div class="elemento_carrito_total subtotal">
				<p class="titulo_detalles_producto left">Total</p>
				<ul class="left">
					<li class="moneda">mxn $</li>
					<li class="precio">200.00</li>
					<li class="moneda">usd $</li>
					<li class="precio">16.00</li>
					<li class="moneda">eur €</li>
					<li class="precio">6.00</li>
				</ul>
				<hr>
			</div><!-- elemento_carrito_total -->

			<button>Realizar compra</button>

		</div><!-- detalles_producto -->


	</div><!-- carrito_total -->

<?php get_footer(); ?>