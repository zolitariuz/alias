<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		// LIBRO
		add_meta_box('libros_metabox', 'Información General', 'libros_metadata_setup', 'libro', 'side', 'default');

		// DISTRIBUIDOR
		add_meta_box('distribuidor_metabox', 'Link', 'distribuidor_metadata_setup', 'distribuidor', 'normal', 'default');

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	// LIBRO
	function libros_metadata_setup($post){

		$meta   = get_post_meta($post->ID, '_libro_meta', true);
		$numero = isset($meta['numero']) ? $meta['numero'] : '';
		$precio = isset($meta['precio']) ? $meta['precio'] : '';
		$link   = isset($meta['link'])   ? $meta['link']   : '';

		wp_nonce_field(__FILE__, '_libro_meta_nonce');

		echo <<< libro_metabox

			<div class="libro-meta">
				<label for="numero">&nbsp;Identificador</label>
				<input type='text' class='widefat' id='numero' name='_libro_meta[numero]' value='$numero'/>
				<label for="precio">&nbsp;Precio</label>
				<input type='text' class='widefat' id='precio' name='_libro_meta[precio]' value='$precio'/>
				<label for="link">&nbsp;Link</label>
				<input type='url' class='widefat' id='link' name='_libro_meta[link]' value='$link'/>
			</div>

libro_metabox;
	}


	// DISTRIBUIDOR
	function distribuidor_metadata_setup($post){
		$link = get_post_meta($post->ID, '_distribuidor_link', true);
		wp_nonce_field(__FILE__, '_distribuidor_link_nonce');
		echo "<input type='url' class='widefat' id='link' name='_distribuidor_link' value='$link'/>";
	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){

		if ( ! current_user_can('edit_page', $post_id)){
			return $post_id;
		}

		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ){
			return $post_id;
		}

		// LIBROS METADATA
		if ( isset($_POST['_libro_meta']) ) {
			if( ! check_admin_referer(__FILE__, '_libro_meta_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_libro_meta', $_POST['_libro_meta']);
		}


		// DISTRIBUIDOR LINK
		if ( isset($_POST['_distribuidor_link']) ) {
			if( ! check_admin_referer(__FILE__, '_distribuidor_link_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_distribuidor_link', $_POST['_distribuidor_link']);
		}

	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////



	add_action('edit_form_after_title', function($post){
		if ( get_post_type($post) === 'libro' ) {
			echo "<h3 class='post-content-title'>Descripción</h3>";
		}
	});


	add_filter( 'manage_posts_columns', function($columns){
		if ( get_post_type($post) === 'distribuidor' ) {
			$columns = array(
				'cb'    => '<input type="checkbox" />',
				'title' => 'Título',
				'link'  => 'Link',
				'date'  => 'Fecha'
			);
		}
		return $columns;
	});



	add_action( 'manage_posts_custom_column', 'custom_distribuidor_columns', 10, 2 );

	function custom_distribuidor_columns($column, $post_id){
		$link = get_post_meta($post_id, '_distribuidor_link', true);
		if( $column === 'link' ){
			echo "<input type='url' class='regular-text distribuidor_link' name='_distribuidor_link' value='$link'/>";
			echo "<input type='submit' class='button action guardar_link' data-post_id='$post_id' value='Guardar'>";
		}
	}
