<?php

	if isset($_GET['email']){
		global $wpdb;
		$email = $_GET['email'];
		$wpdb->query( "DELETE FROM {$wpdb->prefix}newsletter WHERE email = '$email'" );
	}else {
		wp_redirect( site_url() );
	}