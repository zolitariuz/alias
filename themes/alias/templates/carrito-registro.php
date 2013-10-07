
	<form id="forma_registro" method="POST" action="">

		<div class="mitad">
			<label for="nombre"><?php _e('Nombre', 'alias'); ?></label>
			<input type="text" id="nombre" name="nombre" required />
		</div><!-- mitad -->

		<div class="mitad last">
			<label for="nombre"><?php _e('Apellido', 'alias'); ?></label>
			<input type="text" id="apellidos" name="apellidos" required />
		</div><!-- mitad -->

		<label for="nombre"><?php _e('Dirección', 'alias');  ?></label>
		<input type="text" id="direccion" name="direccion" required />

		<div class="mitad">
			<label for="nombre"><?php _e('Ciudad', 'alias'); ?></label>
			<input type="text" id="ciudad" name="ciudad" required />
		</div><!-- mitad -->

		<div class="mitad last">
			<label for="nombre"><?php _e('Estado / Provincia', 'alias'); ?></label>
			<input type="text" id="estado" name="estado" required />
		</div><!-- mitad -->

		<div class="mitad">
			<label for="nombre"><?php _e('País', 'alias'); ?></label>
			<select id="pais" class="borde_gris" >
				<option value="mexico">México</option>
				<option value="mexico">Noruega</option>
				<option value="mexico">Rusia</option>
			</select>
		</div><!-- mitad -->

		<div class="cuarto">
			<label for="nombre"><?php _e('Código Postal', 'alias'); ?></label>
			<input type="text" id="codigo_postal" name="codigo_postal" required />
		</div><!-- cuarto -->

		<div class="cuarto last">
			<label for="nombre"><?php _e('Teléfono fijo', 'alias'); ?></label>
			<input type="text" id="telefono" name="telefono" required />
		</div><!-- cuarto -->

		<label for="mensaje"><?php _e('Notas especiales para la entrega', 'alias'); ?></label>
		<textarea id="mensaje" name="mensaje" required></textarea>

		<label for="email"><?php _e('Correo electrónico', 'alias'); ?></label>
		<input type="email" id="email" name="email" required />

		<input type="checkbox" name="suscripcion" value="">
		<p class="suscripcion"><?php _e('No deseo recibir en mi correo electrónico noticias o recomendaciones de Alias.', 'alias'); ?></label>

		<div class="clear"></div>

		<p class="footnote"><?php _e('Los datos personales que se proporcionen serán usados responsablemente. Leer anuncio de privacidad.', 'alias'); ?></p>

		<input type="submit" value="<?php _e('enviar', 'alias'); ?>">

	</form>