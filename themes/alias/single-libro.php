<?php get_header(); the_post(); ?>

	<div class="single_header">
		<p>15|2</p>
		<h2><?php the_title() ?></h2>
		<?php the_tags( '<h3 class="subtitulo">', ', ', '</h3>' ) ?>
	</div><!-- single_header -->

	<div class="single_content">

		<div class="portada">

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('rectangulo');
			} else {
				echo "<img src='http://placehold.it/180X275'>";
			} ?>

			<p><a href="#">Hojear esta publicación</a></p>

		</div><!-- portada -->

		<div class="content">

			<p><em>David Medalla ha logrado permanecer desapegado, de manera elegante o hasta irónica, de los movimientos artísticos, y a la vez profundamente metido en ellos; una ambivalencia con la que ha mantenido su intensa individualidad y su movilidad mental. Su misma obra es en parte una búsqueda de la manera en que sus invenciones puedan resistir la institucionalización para mantenerse lo más activas, lo más capaces de inspirar a otros.</em></p>
			<p><strong>— DM</strong></p>
			<p><em>De alguna manera, esa palabra imprescindible luftmensch se ha hecho de un mal nombre. Pero aún me parece útil. Según el Diccionario Oxford, un luftmensch es un “visionario impráctico”. ¿Pero alguna vez existió un visionario práctico? Cuando pienso en David Medalla, pienso en él afectuosamente como uno de los pocos auténticos luftmensch que he conocido… un hombre de imaginación incomparable.</em></p>
			<p><strong>— Dore Ashton</strong></p>
			<p>Este libro del reconocido crítico de arte Guy Brett es el primer intento de agrupar un conjunto de obra artística fascinante y efímera que escapa a las deniciones simples. Nacido en Manila, en las Filipinas, en 1942, y radicado desde 1960 principalmente en Londres, David Medalla se ha distinguido internacionalmente como uno de los principales innovadores de la vanguardia. En los últimos sesenta años su obra ha adoptado una multitud de búsquedas y entusiasmos, formas y formatos, para expresar una visión del mundo singular pero profundamente coherente. Orgulloso de sus esfuerzos por mantenerse independiente de las presiones comerciales, burocráticas e intolerantes del mundo del arte, ha sido sin embargo una fuerza creativa internacional, viajando, motivando a artistas, creando grupos y espacios de exposición, y evolucionando su propio arte que aspira al surgimiento de un nuevo tipo de cultura trasnacional y polimorfa.</p>

		</div><!-- content -->

	</div><!-- single_content -->

<?php get_footer(); ?>