<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// post type libro
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
			'rewrite'            => array( 'slug' => 'libros' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'taxonomies'         => array( 'coleccion' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'libro', $args );

	});