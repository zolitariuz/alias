<?php


// CUSTOM USER CONFIGURATIONS /////////////////////////////////////////////////////////



	$subscriber = get_role('subscriber');


	add_role( 'cliente', 'Cliente', $subscriber->capabilities );


	remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );


	add_filter('user_contactmethods', function ( $contactmethods ) {
		unset($contactmethods['url']);
		unset($contactmethods['aim']);
		unset($contactmethods['yim']);
		unset($contactmethods['jabber']);
		$contactmethods['twitter']  = 'Twitter';
		$contactmethods['facebook'] = 'Facebook';
		return $contactmethods;
	});