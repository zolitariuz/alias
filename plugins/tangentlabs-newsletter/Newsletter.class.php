<?php

	/**
	 * Class Newsletter
	 */
	class Newsletter {


		public function __construct()
		{

			// plugin styles and scripts.
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'localize_admin_scripts' ) );


			register_activation_hook( __FILE__, array( 'Newsletter', 'activation_hook_callback' ) );
			register_uninstall_hook( __FILE__, array( 'Newsletter', 'uninstall_hook_callback' ) );
		}


		/**
		 * Crea la tabla para guardar los mails del newsletter
		 * @return void
		 */
		public static function activation_hook_callback()
		{

		}


		public static function uninstall_hook_callback()
		{

		}


		public static function load_plugin_languages()
		{
			load_plugin_textdomain( 'newsletter', false,  plugins_url('lang', __FILE__ ) );
		}


		/**
		 * Register and enqueue admin styles.
		 */
		public function enqueue_admin_styles()
		{
			wp_enqueue_style( 'newsletter-styles', plugins_url('css/admin.css', __FILE__ ) );
		}


		/**
		 * Register and enqueue admin scripts.
		 */
		public function enqueue_admin_scripts()
		{
			wp_enqueue_script( 'jquery-ui-autocomplete' );
			wp_enqueue_script( 'newsletter-js', plugins_url('js/admin.js', __FILE__ ), array('jquery', 'jquery-ui-autocomplete'), false, true );
		}


		/**
		 * Localize admin scripts.
		 */
		public function localize_admin_scripts()
		{
			wp_localize_script('newsletter-js', 'ajax_url',  admin_url('admin-ajax.php') );
		}


		public static function show_options_page()
		{
			add_menu_page('Neswletter', 'Neswletter', 'administrator', 'alias-newsletter', array('Newsletter', 'add_menu_page_callback'), '', 120 );
		}


		public static function add_menu_page_callback(){

			add_settings_section('newsletter_main_section', '', null, __FILE__); ?>

			<div class="wrap">
				<?php screen_icon('generic'); ?>
				<h2>Newsletter</h2>

				<div id="newsletter-content">
					<form method="POST" action="">
						<label for="title" class="label-title">Título</label>
						<input type='text' class='widefat' id="title" name='newsletter_title' value='' placeholder="email title">

						<label for="newsletter_content" class="label-title">Contenido</label>
						<?php wp_editor( '','newsletter_content', array('textarea_name' => 'newsletter_content','media_buttons' => false) ); ?>

						<p class="submit">
							<input name="submit" type="submit" class="button-primary" value="Enviar" />
						</p>
					</form>
				</div>
			</div><?php




			//echo "<input type='text' class='widefat' name='newsletter_title' value=''>";
			//wp_editor( '','newsletter_content',array('textarea_name' => 'newsletter_content','media_buttons' => false) );
		}




	}
