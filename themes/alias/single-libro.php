<?php get_header(); the_post();

	$meta   = get_post_meta($post->ID, '_libro_meta', true);
	$numero = isset($meta['numero']) ? $meta['numero'] : '';
	$precio = isset($meta['precio']) ? $meta['precio'] : '';
	$link   = isset($meta['link'])   ? $meta['link']   : ''; ?>

	<div class="single_header">
		<p><?php echo $numero; ?></p>
		<h2><?php the_title() ?></h2>
		<h3 class="subtitulo"><?php print_the_terms($post->ID, 'autor'); ?></h3>
	</div><!-- single_header -->

	<div class="single_content">

		<div class="portada">

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('rectangulo');
			} else {
				echo "<img src='http://placehold.it/180X275'>";
			} ?>

			<p><a href="<?php echo $link; ?>">Hojear esta publicación</a></p>

		</div><!-- portada -->

		<div class="content">
			<?php the_content() ?>
		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer(); ?>