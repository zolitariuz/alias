<?php
get_header();
$template_url = get_bloginfo( 'template_url' );
the_post();
?>

	<form id="forma_contacto" method="post" action="<?php echo $template_url; ?>/contacto_recibido">
		<label>nombre</label>
		<input type="text">

		<label>correo electrónico</label>
		<input type="text">

		<label>asunto</label>
		<input type="text">

		<label>mensaje</label>
		<textarea></textarea>

		<input type="submit" value="enviar">

		<p>
			<strong>informes@aliaseditorial.com<br />
			t. 5533 2849</strong><br />
			Orizaba 36, interior 403, colonia Roma, 06700, Distrito Federal , México
		</p>
	</form>

<?php get_footer(); ?>