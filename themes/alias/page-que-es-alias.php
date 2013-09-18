<?php get_header(); the_post(); ?>

	<div class="single_header">

		<p><?php bloginfo('name') ?></p>

		<h3 class="subtitulo">
			<?php bloginfo('description') ?>
		</h3>

	</div><!-- single_header -->


	<div class="single_content">

		<div class="portada">
			<?php the_post_thumbnail( 'full' ); ?>
			<p>
				<strong>Sara Schulz y Damián Ortega</strong> <br />
				Fotografía publicada en Folio núm.8 <br />
				<a href="#">foliodigital.net</a>
			</p>
		</div><!-- portada -->

		<div class="content">

			<?php the_content(); ?>

		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer(); ?>