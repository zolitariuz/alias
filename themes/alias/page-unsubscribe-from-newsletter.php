<?php

	if ( isset($_GET['ema']) ) {
		global $wpdb;
		$email = $_GET['ema'];

		$reallyReallyEmail = str_replace('%20', '', $email);
		$FIANLreallyReallyEmail = str_replace(' ', '', $reallyReallyEmail);


		$wpdb->query( "DELETE FROM {$wpdb->prefix}newsletter WHERE email = '$FIANLreallyReallyEmail'" );
	} else {
		wp_redirect( site_url() );
	}

	get_header(); ?>

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
		<p><?php _e('Alias', 'alias'); ?></p>
		<h2><?php _e('Te has desuscrito exitosamente.', 'alias'); ?>.</h2>
		<h3 class="subtitulo"><?php print_the_terms($post->ID, 'autor'); ?></h3>
	</div><!-- single_header -->

<?php get_footer(); ?>