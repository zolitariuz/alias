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

		<input type="submit" value="<?php _e('Enviar', 'alias'); ?>">

		<p>
			<a href="mailto:informes@aliaseditorial.com" style="color:black; text-decoration:none;">
				<strong>informes@aliaseditorial.com</strong>
			</a>
			<br />
			<a href="tel://5555332849" style="color:black; text-decoration:none;">
				T. (5255) 55332849
			</a>
			<br />
			Av. Oaxaca 46, interior 205, colonia Roma Norte, Cuauhtémoc, 06700, Distrito Federal, México
		</p>

	</form>

<?php get_footer(); ?>