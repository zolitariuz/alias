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
			add_menu_page('Newsletter', 'Newsletter', 'administrator', 'alias-newsletter', array('Newsletter', 'add_menu_page_callback'), '', 120 );
			add_submenu_page( 'alias-newsletter', 'mailing-list', 'Mailing List', 'administrator', 'mailing-list', array('Newsletter', 'add_submenu_page_callback'));
		}


		public static function add_menu_page_callback()
		{
			add_settings_section('newsletter_main_section', '', null, __FILE__);
			load_template( dirname( __FILE__ ) . '/templates/alias-newsletter.php' );
		}


		public static function add_submenu_page_callback()
		{
			load_template( dirname( __FILE__ ) . '/templates/mailing-list.php' );
		}


		public static function get_newsletter_content()
		{
			$path = dirname( __FILE__ ) . '/templates/newsletter.template.html';
			return file_exists($path) ? file_get_contents($path) : '';
		}

		public static function get_mails()
		{
			global $wpdb;
			return $wpdb->get_col("SELECT email FROM {$wpdb->prefix}newsletter;");
		}


		public static function set_html_content_type()
		{
			return 'text/html; charset=UTF-8';
		}

		public static function send_multiple_recipients($mails, $subject, $message, $headers)
		{


			add_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );

			foreach ($mails as $mail) {
				$message = str_replace('GETUSERMAIL', $mail, $message);
				wp_mail($mail, $subject, stripslashes($message), $headers);
			}

			remove_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
		}


		public static function send($subject, $message)
		{
			$random_hash = md5(date('r', time()));

			$headers  = "From: Alias <informes@aliaseditorial.com>\r\nReply-To: informes@aliaseditorial.com";
			$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";

			add_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );

			wp_mail('scrub.mx@gmail.com', $subject, stripslashes($message), $headers);

			wp_mail('raul.zdesign@gmail.com', $subject, stripslashes($message), $headers);

			remove_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );


			// $recipients  = Newsletter::get_mails();
			// if ( ! $recipients) return false;

			// //define the receiver of the email
			// $random_hash = md5(date('r', time()));
			// $headers  = "From: Alias <informes@aliaseditorial.com>\r\nReply-To: informes@aliaseditorial.com";
			// $headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";

			// Newsletter::send_multiple_recipients($recipients, $subject, $message, $headers);



			//add_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
			//wp_mail($recipients, $subject, stripslashes($message), $headers);
			//remove_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
		}

	}
