<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'alias_taxonomies', 0 );

	function alias_taxonomies(){

		// COLECCIÓNES
		if( ! taxonomy_exists('colecciones')){

			$labels = array(
				'name'              => 'Colecciónes',
				'singular_name'     => 'Colección',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todas',
				'edit_item'         => 'Editar Colección',
				'update_item'       => 'Actualizar Colección',
				'add_new_item'      => 'Nueva Colección',
				'new_item_name'     => 'Nombre Nueva Colección',
				'menu_name'         => 'Colecciónes'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'coleccion' ),
			);

			register_taxonomy( 'coleccion', 'libro', $args );
		}



		// IDIOMA
		if( ! taxonomy_exists('idioma')){

			$labels = array(
				'name'              => 'Idiomas',
				'singular_name'     => 'Idioma',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Idioma',
				'update_item'       => 'Actualizar Idioma',
				'add_new_item'      => 'Nuevo Idioma',
				'new_item_name'     => 'Nuevo Idioma',
				'menu_name'         => 'Idiomas'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'idiomas' ),
			);

			register_taxonomy( 'idioma', 'libro', $args );
		}



		// AUTORES
		if( ! taxonomy_exists('autores')){

			$labels = array(
				'name'              => 'Autores',
				'singular_name'     => 'Autor',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Autor',
				'update_item'       => 'Actualizar Autor',
				'add_new_item'      => 'Nuevo Autor',
				'new_item_name'     => 'Nombre Nuevo Autor',
				'menu_name'         => 'Autores'
			);

			$args = array(
				'hierarchical'      => false,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'autores' ),
			);

			register_taxonomy( 'autor', 'libro', $args );
		}


	}