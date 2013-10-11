	</div><!-- main -->

		<?php if( ! is_home() ) :

			get_sidebar(); ?>

			<div class="footer">

				<p class="aviso">
					<a href="<?php echo qtrans_convertURL(site_url('/aviso-de-privacidad/')) ?>">
						<?php _e('Aviso de privacidad', 'alias') ?>
					</a>
				</p>

				<?php get_template_part( 'templates/footer', 'librerias' ) ?>

			</div><!-- footer -->

		<?php endif; ?>

		</div><!-- container -->

		<?php wp_footer(); ?>

	</body>

</html>