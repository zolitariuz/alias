<?php get_header(); ?>

	<div class="single_header">

		<p>404</p>

		<h3 class="subtitulo">
			Not found
		</h3>

	</div><!-- single_header -->

	<div class="single_content">
		<div class="content">
			<p>Sorry, but the page you were trying to view does not exist.</p>
			It looks like this was the result of either:
			<ul>
				<li>&#149; A mistyped address</li>
				<li>&#149; An out-of-date link</li>
			</ul>

			<br />

			<p>
				<strong>Other things to try:</strong><br />
				Search <strong><?php echo preg_replace( '/http:\/\//', '', get_bloginfo('url')); ?>:</strong>


				<form
					id="form_buscador-404"
					class="form_buscador borde_gris sidebar_elemento"
					action="<?php echo qtrans_convertURL( site_url('/') ); ?>"
					method="GET">

					<input type="submit" value="" id="submit">
					<input name="s" type="text" id="s" class="s" style="width:95%">
				</form>
			</p>

		</div><!-- content -->
	</div><!-- single_content -->

<?php get_footer(); ?>