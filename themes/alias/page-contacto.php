<?php get_header(); the_post(); ?>

	<form id="forma_contacto" method="POST" action="">

		<label for="nombre"><?php _e('Nombre', 'alias'); ?></label>
		<input type="text" id="nombre" name="nombre" required />

		<label for="email"><?php _e('Correo electrónico', 'alias'); ?></label>
		<input type="email" id="email" name="email" required />

		<label for="asunto"><?php _e('Asunto', 'alias'); ?></label>
		<input type="text" id="asunto" name="asunto" required />

		<label for="mensaje"><?php _e('Mensaje', 'alias'); ?></label>
		<textarea id="mensaje" name="mensaje" required></textarea>

		<input type="submit" value="<?php _e('enviar', 'alias'); ?>">

		<p>
			<strong>informes@aliaseditorial.com<br />
			t. 5533 2849</strong><br />
			Orizaba 36, interior 403, colonia Roma, 06700, Distrito Federal , México
		</p>

	</form>

<?php get_footer(); ?>