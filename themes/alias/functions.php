<?php


	define( 'JSPATH', get_template_directory_uri() . '/js/' );

	define( 'CSSPATH', get_template_directory_uri() . '/css/' );

	define( 'THEMEPATH', get_template_directory_uri() . '/' );



// FRONT END SCRIPTS AND STYLES //////////////////////////////////////////////////////



	add_action( 'wp_enqueue_scripts', function(){


		// scripts
		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), null, true );
		wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );

		// localize scripts
		wp_localize_script( 'functions', 'ajax_url',  admin_url('admin-ajax.php') );

		// styles
		wp_register_style( 'styles', get_stylesheet_uri() );

	});



// REMOVE ADMIN BAR FOR NON ADMINS ///////////////////////////////////////////////////



	add_filter( 'show_admin_bar', function($content) {
		return ( current_user_can("administrator") ) ? $content : false;
	});



// CAMBIAR EL CONTENIDO DEL FOOTER EN EL DASHBOARD ///////////////////////////////////



	add_filter( 'admin_footer_text', function() {
		echo 'Creado por <a href="https://twitter.com/zolitariuz">@zolitariuz</a>. ';
		echo ' y <a href="https://twitter.com/scrubmx">@scrubmx</a>. ';
		echo 'Powered by <a href="http://www.wordpress.org">WordPress</a>';
	});



// POST TYPES, METABOXES AND TAXONOMIES //////////////////////////////////////////////



	//require_once('inc/metaboxes.php');


	//require_once('inc/post-types.php');


	require_once('inc/pages.php');



// POST THUMBNAILS SUPPORT ///////////////////////////////////////////////////////////



	if(function_exists( 'add_theme_support' )){
		add_theme_support( 'post-thumbnails' );
	}

	if(function_exists( 'add_image_size' )){
		add_image_size( 'cuadrado', 180, 180, true );
		add_image_size( 'rectangulo', 180, 275, true );
	}

