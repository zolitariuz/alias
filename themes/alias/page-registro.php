<?php get_header(); the_post(); ?>

	<form id="forma_registro" method="POST" action="<?php site_url('/contacto-recibido/') ?>">

		<div class="mitad">
			<label for="nombre">nombre</label>
			<input type="text" id="nombre" name="nombre" required />
		</div><!-- mitad -->

		<div class="mitad last">
			<label for="nombre">apellidos</label>
			<input type="text" id="apellidos" name="apellidos" required />
		</div><!-- mitad -->

		<label for="nombre">dirección</label>
		<input type="text" id="direccion" name="direccion" required />

		<div class="mitad">
			<label for="nombre">ciudad</label>
			<input type="text" id="ciudad" name="ciudad" required />
		</div><!-- mitad -->

		<div class="mitad last">
			<label for="nombre">estado / provincia</label>
			<input type="text" id="estado" name="estado" required />
		</div><!-- mitad -->

		<div class="mitad">
			<label for="nombre">país</label>
			<select class="borde_gris" >
				<option value="mexico">México</option>
			</select>
		</div><!-- mitad -->

		<div class="cuarto">
			<label for="nombre">código postal</label>
			<input type="text" id="codigo_postal" name="codigo_postal" required />
		</div><!-- cuarto -->

		<div class="cuarto last">
			<label for="nombre">Teléfono fijo</label>
			<input type="text" id="telefono" name="telefono" required />
		</div><!-- cuarto -->

		<label for="mensaje">notas especiales para la entrega</label>
		<textarea id="mensaje" name="mensaje" required></textarea>

		<label for="email">correo electrónico</label>
		<input type="email" id="email" name="email" required />

		<input type="checkbox" name="suscripcion" value="">
		<p class="suscripcion">No deseo recibir en mi correo electrócnico noticias o recomendaciones de Alias.</label>
		<div class="clear"></div>

		<p class="footnote">Los datos personales que se proporcionen serán usados responsablemente. Leer anuncio de privacidad.</p>


		<input type="submit" value="enviar">

	</form>

<?php get_footer(); ?>