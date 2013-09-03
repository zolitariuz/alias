<?php
$template_url = get_bloginfo( 'template_url' );
?>

<div class="sidebar">

	<?php if ( is_page('single-colecciones') ): ?>

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

		<button class="newsletter borde_gris sidebar_elemento">
			<p>Comprar ahora</p>
		</button><!-- newsletter -->

		<button class="newsletter borde_gris sidebar_elemento">
			<span class="carrito_img"></span>
			<p>Añadir al carrito</p>
		</button><!-- newsletter -->

		<hr>

		<div class="clear"></div>

	<?php endif; ?>

	<div class="lang borde_gris sidebar_elemento">
		<p>Eng.</p>
	</div><!-- lang -->

	<div class="carrito borde_gris sidebar_elemento">
		<span class="carrito_img"></span>
		<p>00</p>
	</div><!-- carrito -->

	<ul class="redes sidebar_elemento">
		<li><a href="#" class="fb"></a></li>
		<li><a href="#" class="tw"></a></li>
	</ul><!-- carrito -->

	<form id="form_buscador" class="form_buscador borde_gris sidebar_elemento">
		<input type="submit" value="">
		<input name="search" type="text">
	</form><!-- form_buscador -->

	<button class="newsletter borde_gris sidebar_elemento">
		<span class="newsletter_img"></span>
		<p>Suscríbete al newsletter</p>
	</button><!-- newsletter -->

	<div class="sidebar_bottom">

	<img src="<?php echo $template_url; ?>/images/sidebar_bottom.jpg">

	</div><!-- sidebar_bottom -->

</div><!-- sidebar -->