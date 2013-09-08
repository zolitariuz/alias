<html>

	<?php $template_url = get_bloginfo( 'template_url' ); ?>

	<head>
		<title><?php bloginfo('name') ?></title>
	</head>



	<body>
		<div class="container">

			<?php if ( is_home() ): ?>
				<div class="header_index">

					<div class="logo">
						<a href="#"><h1>Alias</h1></a>
					</div><!-- logo -->

					<div class="entrar">
						<p> <a href="#">Entrar</a> / <a href="#">Enter</a> </p>
					</div><!-- entrar -->

				</div><!-- header -->
			<?php endif; ?>

			<?php if ( ! is_home() ): ?>
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






















