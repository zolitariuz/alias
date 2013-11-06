<?php get_header(); the_post(); ?>

	<div class="single_header noticia">

		<h2><?php the_title() ?></h2>
		<h3 class="subtitulo"><?php subtitulo_noticia($post->ID) ?></h3>

	</div><!-- single_header -->

	<div class="single_content noticia">

		<div class="content">

			<?php the_content() ?>


			<?php $soundcloud = get_post_meta($post->ID, '_soundcloud_meta', true); ?>

			<?php if ( $soundcloud ) : echo $soundcloud; ?>

				<div class="audio play" data-index="0">
					<div class="audio_status"></div>
					<p>Repdroducir audio</p>
				</div><!-- audio -->

				<div class="audio pause" style="display: none;" data-index="0">
					<div class="audio_status"></div>
					<p>Pausar audio</p>
				</div><!-- audio -->

			<?php endif; ?>

		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer() ?>