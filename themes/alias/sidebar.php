
	<div class="sidebar">

		<div class="clear"></div>

		<div class="lang borde_gris sidebar_elemento">

			<?php qtrans_languange_menu(); ?>

		</div><!-- lang -->


		<div class="carrito borde_gris sidebar_elemento">
			<a href="<?php echo site_url('/carrito-de-compras/')?>">
				<span class="carrito_img"></span>
				<p><?php echo ShopingCart::get_total_products(); ?></p>
			</a>
		</div><!-- carrito -->

		<ul class="redes sidebar_elemento">
			<li><a href="https://www.facebook.com/alias.editorial" target="_blank" class="fb"></a></li>
			<li><a href="https://twitter.com/aliaseditorial" target="_blank" class="tw"></a></li>
		</ul><!-- carrito -->


		<?php get_search_form(); ?>


		<button class="newsletter borde_gris sidebar_elemento">

			<span class="newsletter_img"></span>
			<p class="newsletter">Suscríbete al newsletter</p>
			<form class="form_newsletter" action="">
				<input class="form_newsletter_input" type="text" value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" >
				<input type="submit">
			</form>
		</button><!-- newsletter -->


		<?php if ( get_post_type() == 'noticia' || get_post_type() == 'libro' && ! is_single() ) {?>

			<div class="sidebar_bottom">

			<img src="<?php echo THEMEPATH; ?>images/sidebar_bottom.jpg">

			</div><!-- sidebar_bottom -->

		<?php } ?>

	</div><!-- sidebar -->