<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Alias Editorial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/pdf.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>

	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/turn.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/onload.js"></script>

</head>
<body>
	<?php the_post(); ?>
	<!-- BEGIN PAGE -->
	<div id="page">

		<!-- BEGIN ABOUT -->
		<article id="about">

			<ul>
				<li>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</li>
			</ul>

		</article>
		<!-- END ABOUT -->

		<!-- BEGIN BOOK -->
		<div id="book">



			<?php
				$primer_contador = 0;
				$attachments = get_posts(
					array(
						'post_type' => 'attachment',
						'posts_per_page' => -1,
						'post_parent' => $post->ID
					)
				);
				$ultimo = count($attachments);
				array_multisort($attachments, SORT_NUMERIC, $attachments);
				foreach ( $attachments as $attachment ) {

					$mime = get_post_mime_type( $attachment->ID );
					if ( $mime != 'application/pdf' ){

						$pagina = wp_get_attachment_image_src( $attachment->ID, 'full' );

						if ( $primer_contador == 0 ){ ?>
							<div style="background-image:url(<?php echo $pagina[0] ?>);"></div>
						<?php } else if ($primer_contador == $ultimo - 1){ ?>
							<div style="background-image:url(<?php echo $pagina[0] ?>);"></div>
						<?php } else {?>

							<div class="double first" style="background-image:url(<?php echo $pagina[0] ?>);">
							</div>
							<div class="double second" style="background-image:url(<?php echo $pagina[0] ?>);">
							</div>
						<?php } ?>

			<?php
				$primer_contador++;
				} }
			?>



		</div><!-- END BOOK -->

		<a class="nav_arrow prev"></a>
		<a class="nav_arrow next"></a>

	</div>
	<!-- END PAGE -->


	<!-- BEGIN FOOTER -->
	<footer id="footer">

		<a href="#" id="logo">
			<span style="color:#FFF; font-size:20PX;">ALIAS</span>
		</a>

		<nav id="center" class="menu">
			<ul>
				<li>
				<?php
					$attachments = get_posts(
						array(
							'post_type' => 'attachment',
							'posts_per_page' => -1,
							'post_parent' => $post->ID
						)
					);
					foreach ( $attachments as $attachment ) {
						$mime = get_post_mime_type( $attachment->ID );
						$pdf = wp_get_attachment_url( $attachment->ID );
						if ( $mime === 'application/pdf' ){ ?>
							<a href="<?php echo $pdf; ?>" class="download" title="Descargar PDF" target="_blank"></a>
				<?php } } ?>
				</li>
				<li>
					<a class="zoom_in" title="Zoom +"></a>
				</li>
				<li>
					<a class="zoom_out" title="Zoom -"></a>
				</li>
								<li>
					<a class="zoom_original" title="Zoom Original (Escala 1:1)"></a>
				</li>
				<li>
					<a class="show_all" title="Visualizar todas las páginas"></a>
				</li>
				<li>
					<a class="home" title="Ir a la Portada"></a>
				</li>

			</ul>
		</nav>

		<nav id="right" class="menu">
			<ul>

				<li class="goto">
					<span style="color:#FFF; font-size:14PX;">Derechos Reservados &reg;</span>
				</li>
			</ul>
		</nav>

	</footer>
	<!-- END FOOTER -->







<!-- BEGIN ALL PAGES -->
<div class="overlay" id="all_pages">

	<section class="container">

		<div id="menu_holder">

			<ul id="slider">

				<?php
					$contador = 1;
					$attachments = get_posts(
						array(
							'post_type' 	 => 'attachment',
							'posts_per_page' => -1,
							'post_parent' 	 => $post->ID
						)
					);
					array_multisort($attachments, SORT_NUMERIC, $attachments);
					foreach ( $attachments as $attachment ) {
					$pagina = wp_get_attachment_image_src( $attachment->ID, 'full' );

					$mime = get_post_mime_type( $attachment->ID );
					if ( $mime != 'application/pdf' ){
					?>

						<li class="page<?php echo $contador; ?>">
							<img src="<?php echo $pagina[0]; ?>" alt="" />
						</li>

				<?php $contador++; } } ?>


			</ul>
		</div>

	</section>

</div>
<!-- END ALL PAGES -->


</body>
</html>