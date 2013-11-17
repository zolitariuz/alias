<?php



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
		$mail    = wp_mail('informes@aliaseditorial.com', $_GET['asunto'], $mensaje, $headers );
		wp_send_json($mail);
	}
	add_action('wp_ajax_formulario_contacto_enviado', 'formulario_contacto_enviado');
	add_action('wp_ajax_nopriv_formulario_contacto_enviado', 'formulario_contacto_enviado');



// AJAX SAVE NEWSLETTER EMAIL ////////////////////////////////////////////////////////



	function save_newsletter_email(){

		global $wpdb;

		if ( ! isset($_POST['email'])
			OR ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
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