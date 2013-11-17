<?php get_header(); the_post(); ?>

	<div class="single_header">

		<p><?php the_title(); ?></p>

	</div><!-- single_header -->


	<div class="single_content">

		<div class="content aviso-de-privacidad">

			<?php the_content(); ?>

		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer(); ?>