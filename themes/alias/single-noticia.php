<?php get_header(); the_post(); ?>

	<div class="single_header noticia">

		<h2><?php the_title() ?></h2>
		<h3 class="subtitulo">Subtitulo</h3>

	</div><!-- single_header -->

	<div class="single_content noticia">

		<div class="content">
			<?php the_content() ?>

			<div class="audio play">
				<div class="audio_status"></div>
				<p>Pausar audio</p>
			</div><!-- audio -->

			<div class="audio pause">
				<div class="audio_status"></div>
				<p>Repdroducir audio</p>
			</div><!-- audio -->

		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer() ?>