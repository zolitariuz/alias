
	<div class="wrap">

		<?php screen_icon('generic'); ?>

		<h2><?php _e('Enviar Newsletter', 'newsletter'); ?></h2>

		<div id="newsletter-content">

			<div id="newsletter-success" class="updated below-h2">
				<p><?php _e('Se envío el newsletter', 'newsletter') ?>.</p>
			</div>

			<form method="POST" action="">
				<label for="title" class="label-title">Subject:</label>
				<input type='text' class='widefat' id="title" name='newsletter_title' value=''>

				<label for="newsletter_content" class="label-title"><?php _e('Contenido', 'newsletter'); ?>:</label>

				<?php $newsletterContent = Newsletter::get_newsletter_content();
				wp_editor( $newsletterContent, 'newsletter_content', array('textarea_name' => 'newsletter_content','media_buttons' => true) ); ?>

				<p class="submit">
					<input id="send-newsletter" name="submit" type="submit" class="button button-primary button-large" value="<?php _e('Enviar', 'newsletter'); ?>" />
				</p>
			</form>

		</div><!-- end #newsletter-content -->

	</div><!-- end .wrap -->