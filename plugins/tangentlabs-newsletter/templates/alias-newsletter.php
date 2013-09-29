
	<div class="wrap">

		<?php screen_icon('generic'); ?>

		<h2>Enviar Newsletter</h2>

		<div id="newsletter-content">

			<form method="POST" action="">
				<label for="title" class="label-title"><?php _e('Título', 'newsletter'); ?></label>
				<input type='text' class='widefat' id="title" name='newsletter_title' value=''>

				<label for="newsletter_content" class="label-title"><?php _e('Contenido', 'newsletter'); ?></label>
				<?php wp_editor( '','newsletter_content', array('textarea_name' => 'newsletter_content','media_buttons' => false) ); ?>

				<p class="submit">
					<input name="submit" type="submit" class="button-primary" value="<?php _e('Enviar', 'newsletter'); ?>" />
				</p>
			</form>

		</div><!-- end #newsletter-content -->

	</div><!-- end .wrap -->