<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php bloginfo('description') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name') ?></title>
		<?php wp_head() ?>
	</head>

	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="container">

			<?php if( is_home() ) : ?>
				<div class="header_index">

					<div class="logo">
						<a href="#"><h1>Alias</h1></a>
					</div><!-- logo -->

					<div class="entrar">
						<p> <a href="#">Entrar</a> / <a href="#">Enter</a> </p>
					</div><!-- entrar -->

				</div><!-- header -->
			<?php endif; ?>


			<?php if( ! is_home() ) : ?>
				<div class="header">

					<div class="logo">
						<a href="#"><h1>Alias</h1></a>
					</div><!-- logo -->

					<ul class="menu">
						<li>
							<a href="#" class="<?php if( is_page('colecciones') ){ echo 'active'; } ?>" >COLECCIONES</a>
							<ul>
								<li>·</li>
								<li><a href="#">clásica</li></li>
								<li>·</li>
								<li><a href="#">antítesis</a></li>
							</ul>
						</li>
						<li></li>
						<li> / </li>
						<li></li>
					    <li><a href="#">QUÉ ES ALIAS</a></li>
					    <li></li>
					    <li> / </li>
					    <li></li>
					    <li><a href="#">NOTICIAS</a></li>
					    <li></li>
					    <li>/ </li>
					    <li></li>
					    <li><a href="#">GALERÍA</a></li>
					    <li></li>
						<li>/ </li>
						<li></li>
						<li><a href="#">CONTACTO</a></li>
					</ul><!-- menu -->

				</div><!-- header -->
			<?php endif; ?>

			<div class="main <?php if ( is_home() ){ echo 'home'; } ?>">






















