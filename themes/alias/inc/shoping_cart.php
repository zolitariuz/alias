<?php

	/**
	 * Carrito de compras basado en $_SESSION
	 *
	 * @author    Jorge González <scrub.mx@gmail.com>
	 * @version   1.0
	 */
	class ShopingCart {


		/**
		 * Set wordpress action hooks to handle user sessions.
		 */
		public function __construct()
		{
			// enqueue the session start method
			add_action( 'init', array( $this, 'start_session' ), 1 );

			// enqueue session destroy methods
			add_action( 'wp_logout', array( $this, 'end_session' ) );
			add_action( 'wp_login', array( $this, 'end_session' ) );
		}



		/**
		 * inicializa la session del usuario
		 * @return void
		 */
		public function start_session() {
			if( ! session_id()) session_start();
		}



		/**
		 * Destruye la session del usuario
		 * @return void
		 */
		public function end_session() {
			session_destroy();
		}



		/**
		 * The addtocart function makes sure that the session variable is initialzed
		 * then stores the received productid and quantiy to next available index.
		 * And note that there is no need to increment the $max variable
		 * @uses  ShopingCart::product_exists
		 *
		 * @param int $product_id
		 * @param int $quantity
		 * @return void
		 */
		public static function add_to_cart($product_id, $quantity)
		{
			if ( ! $product_id  OR $quantity < 1 ) return;


			if ( isset($_SESSION['cart']) ) {

				if( ShopingCart::product_exists($product_id) ) return;

				$max = count($_SESSION['cart']);

				$_SESSION['cart'][$max]['productid'] = $product_id;
				$_SESSION['cart'][$max]['quantity']  = $quantity;
			} else {
				$_SESSION['cart'] = array();
				$_SESSION['cart'][0]['productid'] = $product_id;
				$_SESSION['cart'][0]['quantity']  = $quantity;
			}
		}



		/**
		 * The function goes through all the elements of shopping cart and checks if a products exists in the shopping cart
		 * @param  int $product_id [description]
		 * @return int
		 */
		public static function product_exists($product_id)
		{
			$product_id = intval($product_id);
			$max        = count($_SESSION['cart']);
			$flag       = 0;
			for($i=0; $i<$max; $i++){
				if($product_id == $_SESSION['cart'][$i]['productid']){
					$flag = 1; break;
				}
			}
			return $flag;
		}



		/**
		 * The remove_product function first finds the product and then removes the corresponding index from the session array.
		 * The last statement { $_SESSION['cart'] = array_values($_SESSION['cart']) } resets the array indexes.
		 * @param  int $product_id
		 * @return void
		 */
		public static function remove_product($product_id)
		{
			$product_id = intval($product_id);
			$max        = count($_SESSION['cart']);
			for($i=0; $i<$max; $i++){
				if($product_id == $_SESSION['cart'][$i]['productid']){
					unset($_SESSION['cart'][$i]); break;
				}
			}
			$_SESSION['cart'] = array_values($_SESSION['cart']);
		}



		/**
		 * Returns the total elements in the shopping cart
		 * @return int
		 */
		public static function get_total_products()
		{
			if ( isset($_SESSION['cart']) ) {
				return count($_SESSION['cart']);
			} else {
				return 0;
			}
		}



		/**
		 * Regresa el total para el product_id (post_id) indicado
		 * @param  int $product_id
		 * @return int
		 */
		public static function get_product_quantity($product_id)
		{
			$count = 0;
			if ( isset($_SESSION['cart']) ) {
				foreach ($_SESSION['cart'] as $index => $product) {
					$count += ( $product['productid'] == $product_id ) ? (int)$product['quantity'] : 0;
				}
			}
			return $count;
		}



		/**
		 * Regresa todos los posts (productos) en el carrito de compras
		 * @uses ShopingCart::get_posts_ids
		 *
		 * @return WP_Query | null
		 */
		public static function get_productos()
		{
			if ( ! isset($_SESSION['cart'])) return false;


			$post_ids = ShopingCart::get_posts_ids($_SESSION['cart']);

			return new WP_Query(array(
				'post_type' => 'libro',
				'post__in'  => $post_ids
			));
		}



		/**
		 * Regresa todos un array con los post_ids de los elementos en el carrito de compras
		 * @param  array $arrayCart $_SESSION[cart]
		 * @return array
		 */
		private static function get_posts_ids($arrayCart)
		{
			$result = array();
			foreach ($arrayCart as $index => $product) {
				$result[$index] = $product['productid'];
			}
			return $result;
		}


	}



	$shopingCart = new ShopingCart();