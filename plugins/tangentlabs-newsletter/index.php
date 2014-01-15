<?php
/**
 * Tangentlabs Newsletter
 *
 * Descripción detallada ...
 *
 * @package tangentlabs-newsletter
 * @author  Jorge González <scrub.mx@gmail.com>
 * @link    http://tangentlabs.mx
 *
 * @wordpress-plugin
 * Plugin Name: Tangentlabs Newsletter
 * Description: Enviar newsletters con templates de html
 * Version:     1.0
 * Author:      tangentlabs
 * Author URI:  http://tangentlabs.mx
 */


	if( ! class_exists('Newsletter')){
		require_once('Newsletter.class.php');
	}


	add_action('admin_menu', function() {
		Newsletter::show_options_page();
	});


	add_action('admin_init', function(){
		$newsletter = new Newsletter();
	});


	add_action('plugins_loaded', function(){
		Newsletter::load_plugin_languages();
	});


	function send_newsletter(){
		$title   = isset($_POST['title'])   ? $_POST['title']   : false;
		$message = isset($_POST['message']) ? $_POST['message'] : false;

		if ( ! $title OR ! $message) wp_send_json_error();

		file_put_contents(
			'/var/www/subdomains/alias/wp-content/themes/alias/php.txt',
			var_export( $message, true )
		);

		//$result = Newsletter::send($title, $message);
		//wp_send_json($result);

		wp_send_json_success();
	}
	add_action('wp_ajax_send_newsletter', 'send_newsletter');
	add_action('wp_ajax_nopriv_send_newsletter', 'send_newsletter');