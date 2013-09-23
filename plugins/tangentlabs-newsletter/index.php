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

	require_once('Newsletter.class.php');


	add_action('admin_menu', function() {
		Newsletter::show_options_page();
	});


	add_action('admin_init', function(){
		$newsletter = new Newsletter();
	});


	add_action('plugins_loaded', function(){
		Newsletter::load_plugin_languages();
	});