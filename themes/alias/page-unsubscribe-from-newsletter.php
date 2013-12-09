<?php

	if isset($_GET['email']){
		global $wpdb;
		$wpdb->query( "DELETE FROM {$wpdb->prefix}newsletter WHERE email = '$email'" );
	}