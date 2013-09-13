<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CONTACTO
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


		// QUÉ ES ALIAS
		if( ! get_page_by_path('que-es-alias') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Qué es Alias',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


		// TÉRMINOS Y CONDICIONES
		if( ! get_page_by_path('terminos-y-condiciones') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Términos y Condiciones',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


		// CARRITO DE COMPRAS
		if( ! get_page_by_path('carrito-de-compras') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Carrito de Compras',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

	});