<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// NOTICIAS
		$labels = array(
			'name'          => 'Noticias',
			'singular_name' => 'Noticia',
			'add_new'       => 'Nueva Noticia',
			'add_new_item'  => 'Nueva Noticia',
			'edit_item'     => 'Editar Noticia',
			'new_item'      => 'Nueva Noticia',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Noticia',
			'search_items'  => 'Buscar Noticia',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Noticias'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'noticias' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'noticia', $args );


		// LIBRO
		$labels = array(
			'name'          => 'Libros',
			'singular_name' => 'Libro',
			'add_new'       => 'Nuevo Libro',
			'add_new_item'  => 'Nuevo Libro',
			'edit_item'     => 'Editar Libro',
			'new_item'      => 'Nuevo Libro',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Libro',
			'search_items'  => 'Buscar Libro',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Libros'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'colecciones' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'coleccion', 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'libro', $args );


		// DISTRIBUIDOR
		$labels = array(
			'name'          => 'Distribuidores',
			'singular_name' => 'Distribuidor',
			'add_new'       => 'Nuevo Distribuidor',
			'add_new_item'  => 'Nuevo Distribuidor',
			'edit_item'     => 'Editar Distribuidor',
			'new_item'      => 'Nuevo Distribuidor',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Distribuidor',
			'search_items'  => 'Buscar Distribuidor',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Distribuidores'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'distribuidores' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 7,
			'supports'           => array( 'title' )
		);
		register_post_type( 'distribuidor', $args );

		// BANNERS
		$labels = array(
			'name'          => 'Banners',
			'singular_name' => 'Banner',
			'add_new'       => 'Nuevo Banner',
			'add_new_item'  => 'Nuevo Banner',
			'edit_item'     => 'Editar Banner',
			'new_item'      => 'Nuevo Banner',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Banner',
			'search_items'  => 'Buscar Banner',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Banners'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'banners' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'banner', 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'banner', $args );



	});