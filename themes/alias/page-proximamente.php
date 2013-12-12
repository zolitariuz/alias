<?php get_header(); ?>

	<style>
		.single_content a{
			color: #888;
			text-decoration: none;
		}
		.single_content a:hover{
			color: #000;
			text-decoration: underline;
		}
	</style>

	<div class="single_header">
		<p>En Construcción</p>
		<h2>Esta sección está en construcción y próximamente estará disponible.</h2>
		<h3 class="subtitulo"><?php print_the_terms($post->ID, 'autor'); ?></h3>
	</div><!-- single_header -->

	<div class="single_content">
		<div class="content">
			<p>Para pedidos por favor escríbenos a <a href="mailto:informes@aliaseditorial.com">informes@aliaseditorial.com</a>.</p>
		</div>
	</div>

<?php get_footer(); ?>