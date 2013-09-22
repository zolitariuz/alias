<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php bloginfo('description') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php print_title(); ?></title>
		<?php wp_head() ?>
	</head>

	<body <?php body_class() ?>>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="container">

			<?php if( is_home() ) : ?>
				<div class="header_index">

					<div class="logo">
						<a href="<?php echo site_url() ?>"><h1>Alias</h1></a>
					</div><!-- logo -->

					<div class="entrar">
						<p>
							<a href="<?php echo site_url('/colecciones/') ?>">Entrar</a>
							 /
							<a href="<?php echo site_url('/en/colecciones/') ?>">Enter</a>
						</p>
					</div><!-- entrar -->

				</div><!-- header -->
			<?php endif; ?>


			<?php if( ! is_home() ) : ?>
				<div class="header clearfix">

					<div class="logo">
						<a href="<?php echo site_url() ?>"><h1>Alias</h1></a>
					</div><!-- logo -->

					<ul class="menu">
						<li>
							<a href="<?php echo site_url('/colecciones/') ?>" class="<?php nav_is('colecciones') ?>" ><?php _e('COLECCIONES', 'alias'); ?></a>
							<ul class="colecciones_menu">
								<li>·</li>
								<li>
									<a href="#clasica" data-filter=".clasica">
										clásica
										<div class="tooltip">
											<p>Colección conformada por proyectos de artistas mexicanos. El nombre “antítesis” se desprende de la comprensión del arte como una dinámica de reflexión que constantemente se cuestiona a sí misma.</p>
										</div><!-- tooltip -->
									</a>
								</li>
								<li>·</li>
								<li>
									<a href="#antitesis" data-filter=".antitesis">
										antítesis
										<div class="tooltip">
											<p>Colección constituida por textos, entrevistas, conferencias o proyectos específicos que no han sido traducidos, impresos y difundidos en habla hispana o cuyas ediciones están descontinuadas o nunca se han distribuido en México.</p>

											<p>Alias · Fusil</p>
											<p>Como parte de la colección principal de Alias, la línea Fusil incorpora textos de crítica de arte.</p>
										</div><!-- tooltip -->
									</a>
								</li>
							</ul>
						</li>
						<li></li>
						<li> / </li>
						<li></li>
<!doctype html>
<!doctype html>
					    <li><a href="<?php echo site_url('/que-es-alias/') ?>" class="<?php nav_is('que-es-alias') ?>"><?php _e('QUÉ ES ALIAS', 'alias'); ?></a></li>
					    <li></li>
					    <li> / </li>
					    <li></li>
<!doctype html>
<!doctype html>
					    <li><a href="<?php echo site_url('/noticias/') ?>" class="<?php nav_is('noticias') ?>"><?php _e('NOTICIAS', 'alias'); ?></a></li>
					    <li></li>
					    <li>/ </li>
					    <li></li>
<!doctype html>
<!doctype html>
					    <li><a href="<?php echo site_url('/galeria/') ?>" class="<?php nav_is('galeria') ?>"><?php _e('GALERÍA', 'alias'); ?></a></li>
					    <li></li>
						<li>/ </li>
						<li></li>
<!doctype html>
<!doctype html>
						<li><a href="<?php echo site_url('/contacto/') ?>" class="<?php nav_is('contacto') ?>"><?php _e('CONTACTO', 'alias'); ?></a></li>
					</ul><!-- menu -->

				</div><!-- header -->
			<?php endif; ?>

			<div class="main <?php if ( is_home() ) echo 'home'; ?>">






















