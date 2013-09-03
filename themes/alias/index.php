<?php
get_header();
$template_url = get_bloginfo( 'template_url' );
?>

	<div class="home_slider">

		<div class="home_slide">

			<img src="<?php echo $template_url; ?>/images/robert.jpg" >
			<p><span>Robert Smithson</span>  Hotel Palenque</p>

		</div><!-- home_slide -->

	</div><!-- slider_home -->


<?php get_footer(); ?>