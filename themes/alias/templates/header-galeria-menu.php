
	<ul class="colecciones_menu">
		<li>·</li>
		<li>
			<?php $href = is_page('galeria') ? qtrans_convertURL(site_url('/galeria/#fotografias')) : '#fotografias'; ?>
			<a href="<?php echo $href; ?>" data-filter=".fotografias" class="<?php is_colecciones_menu_active('fotografias'); ?>">
				fotografías
			</a>
		</li>
		<li>·</li>
		<li>
			<?php $href = is_page('galeria') ? qtrans_convertURL(site_url('/galeria/#videos')) : '#videos'; ?>
			<a href="<?php echo $href; ?>" data-filter=".videos" class="<?php is_colecciones_menu_active('videos'); ?>">
				videos
			</a>
		</li>
	</ul>