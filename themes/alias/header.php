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

		<?php
		$template_url = get_bloginfo( 'template_url' );
		?>

		<div class="container">

			<?php if( is_home() ) : ?>
				<div class="header_index">

					<div class="logo">
						<a href="#"><h1>Alias</h1></a>
					</div><!-- logo -->

					<div class="entrar">
						<p> <a href="<?php echo home_url('/libros') ?>">Entrar</a> / <a href="#">Enter</a> </p>
					</div><!-- entrar -->

				</div><!-- header -->
			<?php endif; ?>


			<?php if( ! is_home() ) : ?>
				<div class="header">

					<div class="logo">
						<a href="<?php echo home_url('/libros') ?>"><h1>Alias</h1></a>
					</div><!-- logo -->

					<ul class="menu">
						<li>
							<a href="<?php echo home_url('/libros') ?>" class="<?php if( is_page('colecciones') ){ echo 'active'; } ?>" >COLECCIONES</a>
							<ul>
								<li>·</li>
								<li><a href="<?php echo home_url('/colecciones/clasica/') ?>">clásica</li></li>
								<li>·</li>
								<li><a href="<?php echo home_url('/colecciones/antitesis/') ?>">antítesis</a></li>
							</ul>
						</li>
						<li></li>
						<li> / </li>
						<li></li>
					    <li><a href="<?php echo home_url('/que-es-alias') ?>">QUÉ ES ALIAS</a></li>
					    <li></li>
					    <li> / </li>
					    <li></li>
					    <li><a href="<?php echo home_url('/noticias') ?>">NOTICIAS</a></li>
					    <li></li>
					    <li>/ </li>
					    <li></li>
					    <li><a href="<?php echo home_url('/galeria') ?>">GALERÍA</a></li>
					    <li></li>
						<li>/ </li>
						<li></li>
						<li><a href="<?php echo home_url('/contacto') ?>">CONTACTO</a></li>
					</ul><!-- menu -->

				</div><!-- header -->
			<?php endif; ?>

			<div class="main <?php if ( is_home() ){ echo 'home'; } ?>">






















