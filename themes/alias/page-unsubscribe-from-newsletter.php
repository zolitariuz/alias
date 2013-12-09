<?php

	if isset($_GET['email']){
		$email = esc_sql($_GET['email');
		global $wpdb;
		$wpdb->query(
			$wpdb->prepare(
				"DELETE FROM $wpdb->prefix{newsletter} WHERE email = %s", $email
			)
		);
	}