	</div><!-- main -->

		<?php if( ! is_home() ) get_sidebar(); ?>

			<div class="footer">

				<p class="aviso"><a href="<?php echo site_url('/aviso-de-privacidad/')?>">Aviso de privacidad.</a></p>

				<?php get_template_part( 'templates/footer', 'librerias' ) ?>

			</div><!-- footer -->

		</div><!-- container -->

		<?php wp_footer(); ?>

	</body>

</html>