<?php


// DEFINIR LOS PATHS A LOS DIRECTORIOS DE JAVASCRIPT Y CSS ///////////////////////////



	define( 'JSPATH', get_template_directory_uri() . '/js/' );

	define( 'CSSPATH', get_template_directory_uri() . '/css/' );

	define( 'THEMEPATH', get_template_directory_uri() . '/' );



// INTERNATIONALIZE THEME ////////////////////////////////////////////////////////////



	add_action( 'after_setup_theme', function (){
		load_theme_textdomain('alias', get_template_directory() . '/languages' );
		apply_filters( 'theme_locale', get_locale(), 'alias' );
	});



// SHOPING CART FUNCTIONS ////////////////////////////////////////////////////////////



	require_once('inc/shoping_cart.php');



// FRONT END SCRIPTS AND STYLES //////////////////////////////////////////////////////



	add_action( 'wp_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), null, false );
		wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );

		enqueue_single_noticia_scripts();
		enqueue_shoping_cart_scripts();

		// localize scripts
		wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );
		wp_localize_script( 'functions', 'site_url', site_url() );
		wp_localize_script( 'functions', 'language', qtrans_getlanguage() );
		wp_localize_script( 'functions', 'i18n',  get_language_strings() );

		// styles
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

	});


	function enqueue_single_noticia_scripts(){
		if ( is_single() AND get_query_var('post_type') === 'noticia' ) {
			wp_enqueue_script( 'soundcloud-api', 'http://w.soundcloud.com/player/api.js', null, null, true );
			wp_enqueue_script( 'soundcloud', JSPATH.'soundcloud.js', array('jquery', 'soundcloud-api'), null, true );
		}
	}


	function enqueue_shoping_cart_scripts(){
		if ( is_page('carrito-de-compras') ) {
			wp_enqueue_script( 'paypal', JSPATH.'paypal.js', array('jquery'), null, false  );

			$shoping_cart =  isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

			// localize paypal
			wp_localize_script( 'paypal', 'ajax_url', admin_url('admin-ajax.php') );
			wp_localize_script( 'functions', 'site_url', site_url() );
			wp_localize_script( 'functions', 'shoping_cart', $shoping_cart );

		}
	}


	function get_language_strings(){
		return array(
			'email_saved'   => __('Gracias, se guardo correctamente tu direccion de correo', 'alias'),
			'email_invalid' => __('Porfavor ingresa una direccion de correo valida', 'alias')
		);
	}



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
		echo 'Creado por <a href="https://twitter.com/zolitariuz">@zolitariuz</a> ';
		echo ' y <a href="https://twitter.com/scrubmx">@scrubmx</a> ';
		echo 'Powered by <a href="http://www.wordpress.org">WordPress</a>';
	});



// POST TYPES, METABOXES AND TAXONOMIES //////////////////////////////////////////////



	require_once('inc/post-types.php');


	require_once('inc/metaboxes.php');


	require_once('inc/taxonomies.php' );


	require_once('inc/pages.php');



// MODIFICAR EL MAIN QUERY ///////////////////////////////////////////////////////////



	add_action( 'pre_get_posts', function($query){

		if ( $query->is_main_query() and ! is_admin() ) {
			if ( is_post_type_archive('libro') ){
				$query->set('posts_per_page', -1);
			}
		}
		return $query;

	});



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



// CREA LA TABLA PARA GUARDAR LOS CORREOS DEL NEWSLETTER /////////////////////////////



	add_action( 'init', function () use (&$wpdb){
		$wpdb->query(
			"CREATE TABLE IF NOT EXISTS wp_newsletter (
				newsletter_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				email VARCHAR(255) DEFAULT NULL,
				fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				PRIMARY KEY (newsletter_id),
				UNIQUE (email)
			) DEFAULT CHARSET = utf8;"
		);
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




	/**
	 * Enviar el mail (Formulario de Contacto)
	 * @return boolean
	 */
	function formulario_contacto_enviado(){

		if ( ! isset($_GET) OR ! filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){
			wp_send_json_error();
		}

		$nombre  = $_GET['nombre'];
		$email   = $_GET['email'];
		$mensaje =  "Fecha: " . date('Y-m-d H:i:s') .
					"\r\nNuevo Mensaje de: $email\r\nAsunto: " .
					$_GET['asunto'] . "\r\n\r\n" .
					$_GET['mensaje'];


		$headers = "From: $nombre <$email> \r\n";
		$mail    = wp_mail('scrub.mx@gmail.com', $_GET['asunto'], $mensaje, $headers );
		wp_send_json($mail);
	}
	add_action('wp_ajax_formulario_contacto_enviado', 'formulario_contacto_enviado');
	add_action('wp_ajax_nopriv_formulario_contacto_enviado', 'formulario_contacto_enviado');



// RELATED POSTS /////////////////////////////////////////////////////////////////////



	function get_related_post($post_id){
		$categories = get_the_category( $post_id );

		$categorie_ids = wp_list_pluck( $categories, 'cat_ID' );

		return new WP_Query(array(
			'post_type'      => 'noticia',
			'posts_per_page' => 1,
			'category__in'   => $categorie_ids
		));

	}


// AJAX SAVE NEWSLETTER EMAIL ////////////////////////////////////////////////////////



	function save_newsletter_email(){

		global $wpdb;

		if ( ! isset($_POST['email']) OR ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			wp_send_json_error();
		}

		$email = esc_sql( $_POST['email'] );

		$result = $wpdb->replace(
			'wp_newsletter',
			array('email' => $email),
			array('%s')
		);

		wp_send_json($result);
	}
	add_action('wp_ajax_save_newsletter_email', 'save_newsletter_email');
	add_action('wp_ajax_nopriv_save_newsletter_email', 'save_newsletter_email');



// AJAX ADD PRODUCT TO SHOPING CART //////////////////////////////////////////////////



	function add_product_to_shopping_cart(){

		if( ! isset($_POST['product_id'])) wp_send_json_error();

		ShopingCart::add_to_cart($_POST['product_id'], 1);
		wp_send_json_success(1);
	}
	add_action('wp_ajax_add_product_to_shopping_cart', 'add_product_to_shopping_cart');
	add_action('wp_ajax_nopriv_add_product_to_shopping_cart', 'add_product_to_shopping_cart');



// AJAX GET PAYPAL PRODUCTS //////////////////////////////////////////////////////////


	function get_paypal_products(){
		$currency = isset($_GET['currency']) ? $_GET['currency'] : 'pesos';
		$result = ShopingCart::get_shoping_cart_products($currency);
		wp_send_json($result);
	}
	add_action('wp_ajax_get_paypal_products', 'get_paypal_products');
	add_action('wp_ajax_nopriv_get_paypal_products', 'get_paypal_products');


// HELPER METHODS AND FUNCTIONS //////////////////////////////////////////////////////



	/**
	 * Regresa true si es el ultimo post del query
	 * @return boolean
	 */
	function is_last_post($query) {
		return $query->current_post + 1 == $query->post_count;
	}



	/**
	 * Imprime una lista separada por commas de todos los terms de la taxonomia especificada.
	 * @param  int      $post_id
	 * @param  string   $taxonomy   default 'category'
	 * @param  string   $delimiter  default ', '
	 * @param  string   $key        default 'name'
	 * @return string
	 */
	function print_the_terms($post_id, $taxonomy = 'category', $delimiter = ', ', $key = 'name'){
		$terms = get_the_terms( $post_id, $taxonomy );

		if ( $terms and ! is_wp_error($terms) ){
			$names  = wp_list_pluck($terms , $key);
			echo implode($delimiter, $names);
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



	/**
	 * Regresa el subtitulo del posts de acuerdo al idioma
	 * @param  int $post_id
	 * @return string
	 */
	function subtitulo_noticia($post_id){
		$subtitulo = get_post_meta($post_id, '_subtitulo_meta', true);
		$language  = qtrans_getLanguage();
		echo is_array($subtitulo) ? $subtitulo[$language] : '';
	}



	/**
	 * Imprime active si el string coincide con la pagina que se esta mostrando
	 * @param  string $string
	 * @return string
	 */
	function nav_is($string = ''){
		$query = get_queried_object();

		if( isset($query->slug) AND preg_match("/$string/i", $query->slug)
			OR isset($query->name) AND preg_match("/$string/i", $query->name)
			OR isset($query->rewrite) AND preg_match("/$string/i", $query->rewrite['slug'])
			OR isset($query->post_title) AND preg_match("/$string/i", remove_accents(str_replace(' ', '-', $query->post_title) ) ) )
			echo 'active';
	}



	/**
	 * Regresa un link para cambiar de idioma en la misma pagina
	 * @return string
	 */
	function qtrans_languange_menu(){
		$currentUrl = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : site_url();

		if (qtrans_getlanguage() === 'es') { ?>
			<a href="<?php echo qtrans_convertURL($currentUrl, 'en'); ?>"><p>En</p></a><?php
		} else { ?>
			<a href="<?php echo qtrans_convertURL($currentUrl, 'es'); ?>"><p>Es</p></a><?php
		}
	}



	/**
	 * Imprime los idiomas (terms) del post_type libro
	 * @uses   print_the_terms
	 *
	 * @param  int $post_id
	 * @return string
	 */
	function libro_idiomas($post_id){
		print_the_terms($post_id, 'idioma');
	}


	/**
	 * Imprime la clase active cuando el single pertenece a la cla
	 * @param  [type]  $term [description]
	 * @return boolean       [description]
	 */
	function is_colecciones_menu_active($term){
		global $post;
		if( is_singular('libro') AND has_term($term, 'coleccion') ){
			echo 'active';
		}
		if( is_page('galeria') AND has_term($term, 'galeria') ){
			echo 'active';
		}
	}



	function div_main_class(){
		echo is_home() ? 'home' : '';
		if ( get_post_type() === 'libro' OR is_page('galeria') ) {
			echo 'main_isotope';
		}
	}