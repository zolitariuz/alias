<?php get_header(); the_post(); ?>

	<style>#forma_contacto input, #forma_contacto textarea{ padding-left: 3px; }</style>

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
			<a href="mailto:informes@aliaseditorial.com" style="color:black; text-decoration:none;" target="_blank" rel="nofollow">
				<strong>informes@aliaseditorial.com</strong>
			</a>
			<br />
			<a href="tel://5555332849" style="color:black; text-decoration:none;" target="_blank" rel="nofollow">
				T. (5255) 55332849
			</a>
			<br />
			<a href="https://www.google.com/maps/preview#!q=Av.+Oaxaca+46%2C+interior+205%2C+colonia+Roma+Norte%2C+Cuauht%C3%A9moc%2C+06700%2C+Distrito+Federal%2C+M%C3%A9xico&data=!4m15!2m14!1m13!1s0x85d1ff371c039175%3A0xfee2df15e32e3a59!3m8!1m3!1d31549231!2d-95.677068!3d37.0625!3m2!1i1653!2i929!4f13.1!4m2!3d19.422518!4d-99.1641877" style="color:black; text-decoration:none;" target="_blank" rel="nofollow">
				Av. Oaxaca 46, interior 205, colonia Roma Norte, Cuauhtémoc, 06700, Distrito Federal, México
			</a>
		</p>

	</form>

<?php get_footer(); ?>