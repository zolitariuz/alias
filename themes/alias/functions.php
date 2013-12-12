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



	require_once('inc/class.ShopingCart.php');



// FRONT END SCRIPTS AND STYLES //////////////////////////////////////////////////////



	add_action( 'wp_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), null, false );
		wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );

		enqueue_single_noticia_scripts();
		enqueue_shoping_cart_scripts();
		enqueue_page_gallery_scripts();

		// localize scripts
		wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );
		wp_localize_script( 'functions', 'site_url', site_url() );
		wp_localize_script( 'functions', 'language', qtrans_getlanguage() );
		wp_localize_script( 'functions', 'i18n',  get_language_strings() );

		$is_gallery = is_page('galeria') ? 'true' : 'false';
		wp_localize_script( 'functions', 'is_gallery', $is_gallery );

		// styles
		wp_enqueue_style( 'styles', get_stylesheet_uri() );
		wp_enqueue_style( 'poshy-tip-css', CSSPATH.'poshy-tip-theme/tip-twitter.css' );

	});


	function enqueue_single_noticia_scripts(){
		$post_type = get_query_var('post_type');
		if ( is_single() AND ( $post_type === 'noticia' OR  $post_type === 'libro' ) ) {
			wp_enqueue_script( 'soundcloud-api', 'http://w.soundcloud.com/player/api.js', null, null, true );
			wp_enqueue_script( 'soundcloud', JSPATH.'soundcloud.js', array('jquery', 'soundcloud-api'), null, true );
		}
	}


	function enqueue_shoping_cart_scripts(){
		if ( is_page('carrito-de-compras') ) {
			wp_enqueue_script( 'paypal', JSPATH.'paypal.js', array('jquery'), null, false  );
			wp_enqueue_script( 'fedex', JSPATH.'fedex.js', array('jquery'), null, true  );

			$shoping_cart =  isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

			// localize paypal
			wp_localize_script( 'paypal', 'ajax_url', admin_url('admin-ajax.php') );
			wp_localize_script( 'functions', 'site_url', site_url() );
			wp_localize_script( 'functions', 'shoping_cart', $shoping_cart );
		}
	}


	function enqueue_page_gallery_scripts(){

		if ( is_page('galeria') ) {

			wp_enqueue_script( 'soundcloud-api', 'http://w.soundcloud.com/player/api.js', null, null, true );
			wp_enqueue_script( 'soundcloud', JSPATH.'soundcloud.js', array('jquery', 'soundcloud-api'), null, true );

			//wp_enqueue_script( 'lightbox', JSPATH.'lightbox-2.6.min.js', array('jquery'), '2.6', true );
			//wp_enqueue_style( 'lightbox-css', CSSPATH. 'lightbox/lightbox.css' );

			wp_enqueue_script( 'fancybox-media', THEMEPATH.'fancybox/helpers/jquery.fancybox-media.js', array('jquery'), '2.6', true );
			wp_enqueue_script( 'fancybox', THEMEPATH.'fancybox/jquery.fancybox.js', array('fancybox-media'), '2.6', true );
			wp_enqueue_style( 'fancybox-css', THEMEPATH. 'fancybox/jquery.fancybox.css' );
		}
	}


	function get_language_strings(){
		return array(
			'email_saved'   => __('Gracias, se guardo correctamente tu direccion de correo', 'alias'),
			'email_invalid' => __('Porfavor ingresa una direccion de correo valida', 'alias'),
			'cart_updated'  => __('Agregaste un libro a tu carrito', 'alias')
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


	require_once('inc/ajax-functions.php');



// MODIFICAR EL MAIN QUERY ///////////////////////////////////////////////////////////



	add_action( 'pre_get_posts', function($query){

		if ( $query->is_main_query() and ! is_admin() ) {
			if ( is_post_type_archive('libro') ){
				$query->set('posts_per_page', -1);
				$query->set( 'post_parent', 0 );
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
			"CREATE TABLE IF NOT EXISTS {$wpdb->prefix}newsletter (
				newsletter_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				email VARCHAR(255) DEFAULT NULL,
				fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				PRIMARY KEY (newsletter_id),
				UNIQUE (email)
			) DEFAULT CHARSET = utf8;"
		);
	});



// RELATED POSTS /////////////////////////////////////////////////////////////////////



	function get_related_post($post_id){
		$ID = get_post_meta( $post_id, '_noticia_relacionada_meta', true );
		return new WP_Query( array( 'post_type' => 'noticia', 'post__in' => array($ID) ) );
	}



// GET COLLECTION POSTS //////////////////////////////////////////////////////////////



	function query_posts_children($post_id){
		global $wpdb;
		return $wpdb->get_results(
			"SELECT * FROM {$wpdb->prefix}posts AS posts
				WHERE posts.post_parent   = $post_id
					AND posts.post_type   = 'libro'
					AND posts.post_status = 'publish'", OBJECT
		);
	}



	function show_collection_posts($posts){
		echo "<h3>". __('En la colección', 'alias') ."</h3><hr>";
		foreach($posts as $libro)
			echo "<p><a href='".site_url("/colecciones/{$libro->post_name}/")."'>" . __($libro->post_title) . "</a></p>";
	}



	function collection_posts($post_id){
		$posts = query_posts_children($post_id);
		if ( $posts ) show_collection_posts($posts);
	}



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
		if ( is_page('galeria') OR ( get_post_type() === 'libro' AND ! is_singular( 'libro' ) ) )
			echo 'main_isotope';

		if ( is_page('galeria') )
			echo ' single_content ';
	}



	function get_published_news(){
		global $wpdb;
		return $wpdb->get_results(
			"SELECT * FROM {$wpdb->prefix}posts AS posts
				WHERE posts.post_type     = 'noticia'
					AND posts.post_status = 'publish'", OBJECT
		);
	}



	function get_post_content_images($post_id){
		global $wpdb;
		$images  = array();
		$results = $wpdb->get_results(
			"SELECT ID FROM wp_posts AS p
				WHERE p.post_mime_type LIKE '%image%'
					AND p.post_parent = $post_id
					AND p.ID NOT IN (
						SELECT pm.meta_value AS ID FROM wp_posts AS p
							INNER JOIN wp_postmeta AS pm ON p.ID = pm.post_id
								AND pm.meta_key = '_thumbnail_id'
					);", OBJECT);
		foreach ($results as $index => $image) {
			$temp = new stdClass();
			$temp->ID  = $image->ID;
			$temp->url = wp_get_attachment_url( $image->ID );
			$images[]  = $temp;
		}
		return $images;
	}



	function get_tranlated_meta($meta_key, $meta){

		if( qtrans_getLanguage() == 'en' ) $meta_key .= '_en';

		return isset( $meta[ $meta_key ] ) ? $meta[ $meta_key ] : '';
	}