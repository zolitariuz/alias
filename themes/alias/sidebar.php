
<div class="sidebar">


	<div class="clear"></div>


	<div class="lang borde_gris sidebar_elemento">

		<?php qtrans_languange_menu(); ?>

	</div><!-- lang -->


	<div class="carrito borde_gris sidebar_elemento">
		<span class="carrito_img"></span>
		<p>00</p>
	</div><!-- carrito -->

	<ul class="redes sidebar_elemento">
		<li><a href="#" class="fb"></a></li>
		<li><a href="#" class="tw"></a></li>
	</ul><!-- carrito -->


	<?php get_search_form(); ?>


	<button class="newsletter borde_gris sidebar_elemento">

		<span class="newsletter_img"></span>

		<p class="newsletter">Suscríbete al newsletter</p>

	</button><!-- newsletter -->


	<?php if ( get_post_type() == 'noticia' || get_post_type() == 'libro' && ! is_single() ) {?>

		<div class="sidebar_bottom">

		<img src="<?php echo THEMEPATH; ?>images/sidebar_bottom.jpg">

		</div><!-- sidebar_bottom -->

	<?php } ?>

</div><!-- sidebar -->