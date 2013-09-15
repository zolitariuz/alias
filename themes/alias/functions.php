<?php


// DEFINIR LOS PATHS A LOS DIRECTORIOS DE JAVASCRIPT Y CSS ///////////////////////////



	define( 'JSPATH', get_template_directory_uri() . '/js/' );


	define( 'CSSPATH', get_template_directory_uri() . '/css/' );


	define( 'THEMEPATH', get_template_directory_uri() . '/' );



// FRONT END SCRIPTS AND STYLES //////////////////////////////////////////////////////



	add_action( 'wp_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), null, false );
		wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );

		// localize scripts
		wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );

		// styles
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

	});



// ADMIN SCRIPTS AND STYLES //////////////////////////////////////////////////////////



	// Admin scripts and styles
	add_action( 'admin_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'admin-js', JSPATH.'admin.js',  array('jquery'), null, true );

		// localize scripts
		wp_localize_script( 'admin-js', 'ajax_url', admin_url('admin-ajax.php') );

		// styles
		wp_enqueue_style( 'admin-css', CSSPATH.'admin.css' );
	});



// REMOVE ADMIN BAR FOR NON ADMINS ///////////////////////////////////////////////////



	add_filter( 'show_admin_bar', function($content){
		return ( current_user_can('administrator') ) ? $content : false;
	});



// CAMBIAR EL CONTENIDO DEL FOOTER EN EL DASHBOARD ///////////////////////////////////



	add_filter( 'admin_footer_text', function() {
		echo 'Creado por <a href="https://twitter.com/zolitariuz">@zolitariuz</a>. ';
		echo ' y <a href="https://twitter.com/scrubmx">@scrubmx</a>. ';
		echo 'Powered by <a href="http://www.wordpress.org">WordPress</a>';
	});



// POST TYPES, METABOXES AND TAXONOMIES //////////////////////////////////////////////



	require_once('inc/post-types.php');


	require_once('inc/metaboxes.php');


	require_once('inc/taxonomies.php' );


	require_once('inc/pages.php');



// POST THUMBNAILS SUPPORT ///////////////////////////////////////////////////////////



	if(function_exists( 'add_theme_support' )){
		add_theme_support( 'post-thumbnails' );
	}

	if(function_exists( 'add_image_size' )){
		add_image_size( 'cuadrado', 180, 180, true );
		add_image_size( 'rectangulo', 180, 275, true );
		add_image_size( 'slider', 984, 539, true );
	}



// QUITAR ELEMENTOS DEL DASHBOARD MENU ///////////////////////////////////////////////



	add_action( 'admin_menu', function(){
		$remove = array(__('Posts'));
		remove_dashboard_menus($remove);
	});



// AJAX UPDATE POST META /////////////////////////////////////////////////////////////


	/**
	 * Actualiza un campo en la tabla wp_postmeta
	 * @param  $_POST['post_id']
	 * @param  $_POST['meta_key']
	 * @param  $_POST['meta_value']
	 * @return (mixed) Returns meta_id if the meta doesn't exist, otherwise returns true on success and false on failure.
	 */
	function ajax_update_post_meta(){
		$post_id    = isset($_POST['post_id'])    ? $_POST['post_id']    : '';
		$meta_key   = isset($_POST['meta_key'])   ? $_POST['meta_key']   : '';
		$meta_value = isset($_POST['meta_value']) ? $_POST['meta_value'] : '';

		$result = update_post_meta($post_id, $meta_key, $meta_value);
		wp_send_json( $result );
	}
	add_action('wp_ajax_ajax_update_post_meta', 'ajax_update_post_meta');
	add_action('wp_ajax_nopriv_ajax_update_post_meta', 'ajax_update_post_meta');



// HELPER METHODS AND FUNCTIONS //////////////////////////////////////////////////////



	/**
	 * Regresa true si es el ultimo post del query
	 * @return boolean
	 */
	function is_last_post() {
		global $wp_query;
		return $wp_query->current_post + 1 == $wp_query->post_count;
	}



	/**
	 * Imprime una lista separada por commas de todos los terms de la taxonomia especificada.
	 * @param  integer $post_id
	 * @param  string  $taxonomy
	 * @return string
	 */
	function print_the_terms($post_id, $taxonomy){
		$terms = get_the_terms( $post_id, $taxonomy );

		if ( $terms and ! is_wp_error($terms) ){
			$names = wp_list_pluck($terms ,'name');
			echo implode(', ', $names);
		}
	}



	/**
	 * Quita elementos del sidebar dentro del dashboard
	 * @param  Array $remove Arreglo con los elementos que se omitiran
	 */
	function remove_dashboard_menus($remove){

		global $menu; end($menu);

		while( prev($menu) ) {
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL ? $value[0] : '' , $remove)){
				unset( $menu[key($menu)] );
			}
		}
	}




	/**
	 * Print the <title> tag based on what is being viewed.
	 * @return string
	 */
	function print_title(){
		global $page, $paged;

		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		// Add a page number if necessary
		if ( $paged >= 2 || $page >= 2 ){
			echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
		}
	}
