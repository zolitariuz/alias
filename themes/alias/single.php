<?php
get_header();
$template_url = get_bloginfo( 'template_url' );
the_post();
?>

	<div class="single_header noticia">
		<h2><?php the_title( ); ?></h2>
		<h3 class="subtitulo"><?php the_excerpt(); ?></h3>
	</div><!-- single_header -->

	<div class="single_content noticia">

		<div class="content">

			<?php the_content(  ); ?>

		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer(); ?>