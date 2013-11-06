
	<ul class="colecciones_menu">
		<li>·</li>
		<li>
			<?php $href = is_singular('libro') ? qtrans_convertURL(site_url('/colecciones/#clasica')) : '#clasica'; ?>
			<a href="<?php echo $href; ?>" data-filter=".clasica" class="<?php is_colecciones_menu_active('clasica'); ?>">
				clásica
				<div class="tooltip">
					<p>Colección constituida por textos, entrevistas, conferencias o proyectos específicos que no han sido traducidos, impresos y difundidos en habla hispana o cuyas ediciones están descontinuadas o nunca se han distribuido en México.</p>
					<br />
					<p>Alias · Fusil / Como parte de la colección principal de Alias, la línea Fusil incorpora textos de crítica de arte.</p>
				</div><!-- tooltip -->
			</a>
		</li>
		<li>·</li>
		<li>
			<?php $href = is_singular('libro') ? qtrans_convertURL(site_url('/colecciones/#antitesis')) : '#antitesis'; ?>
			<a href="<?php echo $href; ?>" data-filter=".antitesis" class="<?php is_colecciones_menu_active('antitesis'); ?>">
				antítesis
				<div class="tooltip">
					<p>Colección conformada por proyectos de artistas mexicanos. El nombre “antítesis” se desprende de la comprensión del arte como una dinámica de reflexión que constantemente se cuestiona a sí misma.</p>
				</div><!-- tooltip -->
			</a>
		</li>
	</ul>