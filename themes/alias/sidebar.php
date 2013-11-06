
	<div class="sidebar">

		<div class="clear"></div>

		<div class="lang borde_gris sidebar_elemento">

			<?php qtrans_languange_menu(); ?>

		</div><!-- lang -->


		<div class="carrito borde_gris sidebar_elemento">
			<a href="<?php echo qtrans_convertURL(site_url('/carrito-de-compras/')) ?>">
				<span class="carrito_img"></span>
				<p id="carrito-total"><?php echo ShopingCart::get_total_products(); ?></p>
			</a>
		</div><!-- carrito -->

		<ul class="redes sidebar_elemento">
			<li><a href="https://www.facebook.com/alias.editorial" target="_blank" class="fb"></a></li>
			<li><a href="https://twitter.com/aliaseditorial" target="_blank" class="tw"></a></li>
		</ul><!-- carrito -->


		<?php get_search_form(); ?>


		<button class="newsletter borde_gris sidebar_elemento">

			<span class="newsletter_img"></span>
			<p class="newsletter"><?php _e('Suscríbete al boletín', 'alias'); ?></p>
			<form class="form_newsletter" action="">
				<input
					class="form_newsletter_input"
					type="text"
					value=""
					onfocus="if(this.value==this.defaultValue)this.value='';"
					onblur="if(this.value=='')this.value=this.defaultValue;"
					placeholder="<?php _e('escribe tu correo', 'alias'); ?>"
				>
				<input type="submit">
			</form>
		</button><!-- newsletter -->


		<?php if ( get_post_type() == 'noticia' || get_post_type() == 'libro' && ! is_single() ) {?>

			<div class="sidebar_bottom">

			<?php $query_banner = new WP_Query(array(
					'post_type'      => 'banner',
					'posts_per_page' => -1
			));

			if ( $query_banner->have_posts() ) : while ( $query_banner->have_posts() ) : $query_banner->the_post(); ?>

				<?php the_post_thumbnail( 'full' ); ?>

			<?php endwhile; endif; wp_reset_postdata(); ?>

			</div><!-- sidebar_bottom -->

		<?php } ?>

	</div><!-- sidebar -->