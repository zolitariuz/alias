<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CONTACTO
		if( ! get_page_by_path('proximamente') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Proximamente',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}



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


		// GALERÍA
		if( ! get_page_by_path('galeria') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Galería',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


		// AVISO DE PRIVACIDAD
		if( ! get_page_by_path('aviso-de-privacidad') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Aviso de privacidad',
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


		// UNSUBSCRIBE FROM NEWSLETTER
		if( ! get_page_by_path('unsubscribe-from-newsletter') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Unsubscribe From Newsletter',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

	});