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
				<div class="header">

					<div class="logo">
						<a href="<?php echo site_url() ?>"><h1>Alias</h1></a>
					</div><!-- logo -->

					<ul class="menu">
						<li>
<!doctype html>
<!doctype html>
							<a href="<?php echo site_url('/colecciones/') ?>" class="<?php nav_is('colecciones') ?>" ><?php _e('COLECCIONES', 'alias'); ?></a>
							<ul>
								<li>·</li>
								<li><a href="#clasica">clásica</li></li>
								<li>·</li>
								<li><a href="#antitesis">antítesis</a></li>
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






















