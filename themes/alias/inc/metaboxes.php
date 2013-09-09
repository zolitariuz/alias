<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		// Libros
		add_meta_box('libros_metabox', 'Información General', 'libros_metadata_setup', 'libro', 'side', 'default');

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	// Libros Meta
	function libros_metadata_setup($post){

		$meta   = get_post_meta($post->ID, '_libro_meta', true);
		$numero = isset($meta['numero']) ? $meta['numero'] : '';
		$precio = isset($meta['precio']) ? $meta['precio'] : '';

		wp_nonce_field(__FILE__, '_libro_meta_nonce');

		echo <<< libro_metabox

			<div class="libro-meta">
				<label for="numero">Identificador</label>
				<input type='text' class='widefat' id='numero' name='_libro_meta[numero]' value='$numero'/>
				<label for="precio">Precio</label>
				<input type='text' class='widefat' id='precio' name='_libro_meta[precio]' value='$precio'/>
			</div>

libro_metabox;
	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){

		if ( ! current_user_can('edit_page', $post_id)){
			return $post_id;
		}

		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ){
			return $post_id;
		}

		// Libros Metadata
		if ( isset($_POST['_libro_meta']) ) {
			if( ! wp_verify_nonce($_POST['_libro_meta_nonce'], __FILE__)){
				return $post_id;
			}
			update_post_meta($post_id, '_libro_meta', $_POST['_libro_meta']);
		}

	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////



	add_action('edit_form_after_title', function($post){
		if ( get_post_type($post) === 'libro' ) {
			echo "<h3 class='post-content-title'>Descripción</h3>";
		}
	});
