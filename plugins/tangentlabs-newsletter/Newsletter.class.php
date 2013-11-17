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
			return 'text/html';
		}

		public static function send_multiple_recipients($mails, $subject, $message)
		{

			add_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );

			foreach ($mails as $mail) {
				wp_mail( $mail, $subject, $message, 'From: Alias <informes@aliaseditorial.com>' );
			}

			remove_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
		}


		public static function send($subject, $message)
		{
			$recipients  = Newsletter::get_mails();
			if ( ! $recipients) return false;

			//Newsletter::send_multiple_recipients($recipients, $subject, $message);
			//$message = '<div style="width: 600px; margin: 0 auto" ><div style="width:300px; height: 200px; background: #00ff00"></div><div style="width:300px; height: 200px; background: #0000ff""></div>';
			//add_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
			//wp_mail('scrub.mx@gmail.com', $subject, $message, 'From: Alias <informes@aliaseditorial.com>');
			//remove_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );


			//define the receiver of the email
			$to = 'scrub.mx@gmail.com';
			//define the subject of the email
			$subject = 'Test HTML email';
			//create a boundary string. It must be unique
			//so we use the MD5 algorithm to generate a random hash
			$random_hash = md5(date('r', time()));
			//define the headers we want passed. Note that they are separated with \r\n
			$headers = "From: informes@aliaseditorial.com\r\nReply-To: informes@aliaseditorial.com";
			//add boundary string and mime type specification
			$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";
			//define the body of the message.
			ob_start(); //Turn on output buffering
			?>

			--PHP-alt-<?php echo $random_hash; ?>
			Content-Type: text/html; charset="iso-8859-1"
			Content-Transfer-Encoding: 7bit

			<table id="bodyTable" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin: 0; padding: 0; background-color: #fff; border-collapse: collapse; height: 100%; width: 100%;" width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin: 0; padding: 20px; height: 100%; width: 100%;" align="center" valign="top"><!-- BEGIN TEMPLATE // -->
<table id="templateContainer" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="center" valign="top"><!-- BEGIN PREHEADER // -->
<table id="templatePreheader" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; border-bottom: 1px solid #000; padding-bottom: 10px; margin-bottom: 10px; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="preheaderContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Georgia; font-size: 16px; line-height: 24px; text-align: left;" valign="top">Antítesis / alias</td>
<!-- *|IFNOT:ARCHIVE_PAGE|* -->
<td class="preheaderContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Georgia; font-size: 16px; line-height: 24px; text-align: left;" valign="top" width="130"><a style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #000000; font-weight: normal; text-decoration: none; font-family: Helvetica; font-size: 12px; text-align: right;" href="#">www.aliaseditorial.com</a></td>
<!-- *|END:IF|* --></tr>
</tbody>
</table>
<!-- // END PREHEADER --></td>
</tr>
<tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="center" valign="top"><!-- BEGIN HEADER // -->
<table id="templateHeader" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="headerContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Helvetica; font-size: 20px; font-weight: bold; line-height: 100%; padding-top: 10px; padding-right: 0; padding-bottom: 0; padding-left: 0; text-align: left; vertical-align: middle;" valign="top"><img id="headerImage" style="max-width: 600px; -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;" alt="" src="http://i1.wp.com/alias.tangentlabs.mx/wp-content/uploads/2013/09/Screen-Shot-2013-08-20-at-12.50.16-PM.png" /></td>
</tr>
</tbody>
</table>
<!-- // END HEADER --></td>
</tr>
<tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="center" valign="top"><!-- BEGIN COLUMNS // -->
<table id="templateColumns" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="templateColumnContainer alias_left" style="padding-top: 20px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 140px;" align="center" valign="top">
<table style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="20">
<tbody>
<tr>
<td class="leftColumnContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Helvetica; font-size: 10px; line-height: 150%; padding-top: 0px; padding-right: 30px; padding-bottom: 10px; padding-left: 0px; text-align: left;"><img class="columnImage" style="max-width: 260px; -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; display: inline;" alt="" src="http://placehold.it/160x160" /></td>
</tr>
<tr>
<td class="leftColumnContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Helvetica; font-size: 10px; line-height: 150%; padding-top: 0px; padding-right: 30px; padding-bottom: 10px; padding-left: 0px; text-align: left;" valign="top"><a style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #000000; font-weight: normal; text-decoration: underline;" href="http://kb.mailchimp.com/article/how-do-i-work-with-repeatable-content-blocks" target="_blank">Repeatable sections</a> are noted with plus and minus signs so that you can add and subtract content blocks.

You can also get a little fancy; repeat blocks and remove all text to make image galleries, or do the opposite and remove images for text-only blocks.</td>
</tr>
</tbody>
</table>
</td>
<td class="templateColumnContainer alias_right" style="padding-top: 20px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 340px;" align="center" valign="top">
<table style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="20">
<tbody>
<tr>
<td class="rightColumnContent text_right" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Helvetica; font-size: 12px; line-height: 120%; padding-top: 0; padding-right: 0px; padding-bottom: 10px; padding-left: 100px; text-align: right; display: block;" valign="top">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nulla profecto est, quin suam vim retineat a primo ad extremum. Duo Reges: constructio interrete. Ita multa dicunt, quae vix intellegam. Ergo, inquit, tibi Q. Quod cum accidisset ut alter alterum necopinato videremus, surrexit statim.</td>
</tr>
</tbody>
</table>
<table style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="20">
<tbody>
<tr>
<td class="rightColumnContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Helvetica; font-size: 14px; line-height: 120%; padding-top: 0; padding-right: 0px; padding-bottom: 10px; padding-left: 0px; text-align: justify;"></td>
</tr>
<tr>
<td class="rightColumnContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Helvetica; font-size: 14px; line-height: 120%; padding-top: 0; padding-right: 0px; padding-bottom: 10px; padding-left: 0px; text-align: justify;" valign="top">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quodsi ipsam honestatem undique pertectam atque absolutam. Quid autem habent admirationis, cum prope accesseris? Ut placet, inquit, etsi enim illud erat aptius, aequum cuique concedere. Aperiendum est igitur, quid sit voluptas; Duo Reges: constructio interrete. Hic ego: Pomponius quidem, inquam, noster iocari videtur, et fortasse suo iure. Quid adiuvas? Sed ille, ut dixi, vitiose.
<p style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">Utilitatis causa amicitia est quaesita. Sed quot homines, tot sententiae; Confecta res esset. Tu quidem reddes; Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere. De vacuitate doloris eadem sententia erit. Nam si amitti vita beata potest, beata esse non potest.</p>
<p style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">Age, inquies, ista parva sunt. Inde igitur, inquit, ordiendum est. Ille incendat? Et quod est munus, quod opus sapientiae? Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</p>
<p style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">Portenta haec esse dicit, neque ea ratione ullo modo posse vivi; Quae tamen a te agetur non melior, quam illae sunt, quas interdum optines. Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Id enim natura desiderat. Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio? Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec. Itaque eos id agere, ut a se dolores, morbos, debilitates repellant. Non quam nostram quidem, inquit Pomponius iocans; Vide, quantum, inquam, fallare, Torquate. Memini me adesse P.</p>
<p style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">Quod non faceret, si in voluptate summum bonum poneret. Certe, nisi voluptatem tanti aestimaretis. Quod cum dixissent, ille contra. Quae quo sunt excelsiores, eo dant clariora indicia naturae. Falli igitur possumus. Re mihi non aeque satisfacit, et quidem locis pluribus.</p>
<p style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">Ergo infelix una molestia, fellx rursus, cum is ipse anulus in praecordiis piscis inventus est? Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Si quicquam extra virtutem habeatur in bonis. Quicquid porro animo cernimus, id omne oritur a sensibus; Videamus animi partes, quarum est conspectus illustrior; Eadem fortitudinis ratio reperietur. Bona autem corporis huic sunt, quod posterius posui, similiora. Quid igitur dubitamus in tota eius natura quaerere quid sit effectum? Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere.</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END COLUMNS --></td>
</tr>
<tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="center" valign="top"><!-- BEGIN FOOTER // -->
<table id="templateFooter" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; border-bottom: 1px solid #000; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="footerContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; font-family: Helvetica; font-size: 12px; line-height: 150%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px; text-align: center;" valign="top"><strong>John</strong> · <strong>Robert</strong></td>
</tr>
</tbody>
</table>
<!-- // END FOOTER -->
<!-- BEGIN FOOTER // -->
<table id="templateFooter" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; border-bottom: 1px solid #000; border-collapse: collapse;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="footerContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; font-family: Helvetica; font-size: 12px; line-height: 150%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px; text-align: center;" valign="top"><strong>John</strong> · <strong>Robert</strong></td>
</tr>
</tbody>
</table>
<!-- // END FOOTER --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>


			--PHP-alt-<?php echo $random_hash; ?>--
			<?php
			//copy current buffer contents into $message variable and delete current output buffer
			$message = ob_get_clean();
			//send the email
			//$mail_sent = @mail( $to, $subject, $message, $headers );


			add_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
			wp_mail($to, $subject, $message, $headers);
			remove_filter( 'wp_mail_content_type', array('Newsletter', 'set_html_content_type') );
		}


	}
