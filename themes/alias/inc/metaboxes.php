<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){


		// NOTICIA
		add_meta_box('noticia_metabox', 'Subtitulo', 'noticia_metadata_setup', 'noticia', 'normal', 'default');

		add_meta_box('soundcloud_metabox', 'SoundCloud', 'soundcloud_metadata_setup', 'noticia', 'side', 'default');


		// LIBRO
		add_meta_box('libros_metabox', 'Información General', 'libros_metadata_setup', 'libro', 'normal', 'default');

		add_meta_box('precio_metabox', 'Precio', 'precio_metadata_setup', 'libro', 'side', 'default');

		add_meta_box('noticia_relacionada_metabox', 'Noticia relacionada', 'noticia_relacionada_metadata_setup', 'libro', 'side', 'default');

		add_meta_box('soundcloud_metabox', 'SoundCloud', 'soundcloud_metadata_setup', 'libro', 'side', 'default');


		// DISTRIBUIDOR
		add_meta_box('distribuidor_metabox', 'Link', 'distribuidor_metadata_setup', 'distribuidor', 'normal', 'default');

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	// NOTICIA
	function noticia_metadata_setup($post){
		$meta = get_post_meta($post->ID, '_subtitulo_meta', true);
		$spanish = isset($meta['es']) ? $meta['es'] : '';
		$english = isset($meta['en']) ? $meta['en'] : '';
		wp_nonce_field(__FILE__, '_subtitulo_meta_nonce');

		echo <<< subtitulo_meta

		<div class="noticia-meta">

			<label for="spanish">&nbsp;Español</label>
			<input type='text' class='widefat' id='spanish' name='_subtitulo_meta[es]' value='$spanish'/>

			<label for="english">&nbsp;English</label>
			<input type='text' class='widefat' id='english' name='_subtitulo_meta[en]' value='$english'/>

		</div>

subtitulo_meta;
	}



	// SOUNDCLOUD
	function soundcloud_metadata_setup($post){
		$embed = get_post_meta($post->ID, '_soundcloud_meta', true);
		$embed[0] = isset($embed[0]) ? $embed[0] : '';
		$embed[1] = isset($embed[1]) ? $embed[1] : '';
		$embed[2] = isset($embed[2]) ? $embed[2] : '';

		wp_nonce_field(__FILE__, '_soundcloud_meta_nonce');
		echo "<input type='text' class='widefat' name='_soundcloud_meta[0]' value='$embed[0]'><br /><br />";
		echo "<input type='text' class='widefat' name='_soundcloud_meta[1]' value='$embed[1]'><br /><br />";
		echo "<input type='text' class='widefat' name='_soundcloud_meta[2]' value='$embed[2]'><br /><br />";
		echo '<p class="description">Widget Code</p>';
	}




	function noticia_relacionada_metadata_setup($post){
		$noticias = get_published_news();
		$meta     = get_post_meta($post->ID, '_noticia_relacionada_meta', true);

		wp_nonce_field(__FILE__, '_noticia_relacionada_meta_nonce');

		echo "<select name='_noticia_relacionada_meta' class='widefat'>";
		echo "<option value=''>— Selecciona —</option>";
		foreach ($noticias as  $noticia) {
			$selected = ( $meta == $noticia->ID ) ? 'selected' : '';
			echo "<option value='$noticia->ID' $selected>" . __($noticia->post_title) . "</option>";
		}
		echo "</select>";
	}



	// LIBRO
	function libros_metadata_setup($post){

		$meta           = get_post_meta($post->ID, '_libro_meta', true);
		$identificador  = isset($meta['numero']) ? $meta['numero'] : '';
		$size           = isset($meta['size']) ? $meta['size'] : '';
		$paginas        = isset($meta['paginas']) ? $meta['paginas'] : '';
		$peso           = isset($meta['peso']) ? $meta['peso'] : '';
		$link           = isset($meta['link']) ? $meta['link'] : '';
		$encuadernacion = isset($meta['encuadernacion']) ? $meta['encuadernacion'] : '';
		$impresion      = isset($meta['impresion']) ? $meta['impresion'] : '';
		$isbn           = isset($meta['isbn']) ? $meta['isbn'] : '';

		wp_nonce_field(__FILE__, '_libro_meta_nonce');

		echo <<< libro_metabox

			<div class="libro-meta">

				<label for="numero">&nbsp;Identificador</label>
				<input type='text' class='widefat' id='numero' name='_libro_meta[numero]' value='$identificador'/>

				<label for="size">&nbsp;Dimesiones</label>
				<input type='text' class='widefat' id='size' name='_libro_meta[size]' value='$size'/>

				<label for="paginas">&nbsp;Numero de Paginas</label>
				<input type='number' class='widefat' id='paginas' name='_libro_meta[paginas]' value='$paginas'/>

				<label for="peso">&nbsp;Peso</label>
				<input type='text' class='widefat' id='peso' name='_libro_meta[peso]' value='$peso'/>

				<label for="link">&nbsp;Link</label>
				<input type='url' class='widefat' id='link' name='_libro_meta[link]' value='$link'/>

				<label for="encuadernacion">&nbsp;Encuadernación</label>
				<input type='text' class='widefat' id='encuadernacion' name='_libro_meta[encuadernacion]' value='$encuadernacion'/>

				<label for="impresion">&nbsp;Impresión</label>
				<input type='text' class='widefat' id='impresion' name='_libro_meta[impresion]' value='$impresion'/>

				<label for="isbn">&nbsp;ISBN</label>
				<input type='text' class='widefat' id='isbn' name='_libro_meta[isbn]' value='$isbn'/>

			</div>

libro_metabox;
	}



	// PRECIO
	function precio_metadata_setup($post){

		$meta    = get_post_meta($post->ID, '_precio_meta', true);
		$dolares = isset($meta['dolares']) ? $meta['dolares'] : '';
		$pesos   = isset($meta['pesos']) ? $meta['pesos'] : '';
		$euros   = isset($meta['euros']) ? $meta['euros'] : '';

		wp_nonce_field(__FILE__, '_precio_meta_nonce');

		echo <<< precio_metabox

		<div class="libro-meta">

			<label for="dolares">&nbsp;Dolares</label>
			<input type='text' class='widefat' id='dolares' name='_precio_meta[dolares]' value='$dolares'/>

			<label for="pesos">&nbsp;Pesos</label>
			<input type='text' class='widefat' id='pesos' name='_precio_meta[pesos]' value='$pesos'/>

			<label for="euros">&nbsp;Euros</label>
			<input type='text' class='widefat' id='euros' name='_precio_meta[euros]' value='$euros'/>

		</div>

precio_metabox;

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


		// NOTICIA
		if ( isset($_POST['_subtitulo_meta']) ) {
			if( ! check_admin_referer(__FILE__, '_subtitulo_meta_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_subtitulo_meta', $_POST['_subtitulo_meta']);
		}


		// SOUNDCLOUD
		if ( isset($_POST['_soundcloud_meta']) ) {
			if( ! check_admin_referer(__FILE__, '_soundcloud_meta_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_soundcloud_meta', $_POST['_soundcloud_meta']);
		}


		// LIBROS METADATA
		if ( isset($_POST['_libro_meta']) ) {
			if( ! check_admin_referer(__FILE__, '_libro_meta_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_libro_meta', $_POST['_libro_meta']);
		}


		// NOTICA RELACIONADA
		if ( isset($_POST['_noticia_relacionada_meta']) ) {
			if( ! check_admin_referer(__FILE__, '_noticia_relacionada_meta_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_noticia_relacionada_meta', $_POST['_noticia_relacionada_meta']);
		}


		// LIBROS PRECIO
		if ( isset($_POST['_precio_meta']) ) {
			if( ! check_admin_referer(__FILE__, '_precio_meta_nonce')){
				return $post_id;
			}
			update_post_meta($post_id, '_precio_meta', $_POST['_precio_meta']);
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
