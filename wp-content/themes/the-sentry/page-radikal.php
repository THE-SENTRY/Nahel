<?php get_header(); the_post(); 
$id_img_por_que = get_post_meta( $post->ID, 'imagen_por_que', true );
$url_image_porque = wp_get_attachment_image_src( $id_img_por_que, 'full' );
$id_img_pregunta = get_post_meta( $post->ID, 'imagen_pregunta', true );
$url_image_pregunta = wp_get_attachment_image_src( $id_img_pregunta, 'full' );
$imagen = attachment_image_url($post->ID, 'full'); ?>	
	
	<div class="container-fluid video">

		<video class="bg-video background-image text-right col-sm-6 col-md-offset-6" autoplay id="bgvid">
		    <source src="http://the-sentry.dev/wp-content/uploads/2016/05/radikal.mp4" type="video/mp4">
		</video>
		<div id="video-image"class="background-image-radikal" style="background-image: url('<?php echo $imagen; ?>')">
			<img id="image-radikal" src="<?php echo THEMEPATH; ?>images/radikal.svg" alt="">

		</div>
	</div>
	<div class="container-fluid content-box_secundary">
		<div class="row">
			<div class="col-md-12 boxes_secundary">
				<div class="box_secundary">
					<div class="row box_secundary-content">
						<div class="col-sm-6 description">
							<blockquote class="box_secundary-title"><?php the_title(); ?></blockquote>
							<div class="box_secundary-subtitle">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="col-sm-6 image background-image" style="background: url('<?php echo $url_image_porque[0]; ?>')"></div>
					</div>				
				</div>
			</div>
			<div class="col-md-12 boxes_secundary two">
				<div class="box_secundary">
					<div class="row box_secundary-content">
						<div class="col-sm-6 description">
							<div class="row">
								<div class="col-md-12">
									<blockquote class="box_secundary-title">Regunta a radikal master</blockquote>
								</div>
								<div class="col-sm-5 question">
									<form action="">
										<input placeholder="TU NOMBRE" class="inp-text input-text_secundary" type="text">
										<input placeholder="TU EMAIL" class="inp-text input-text_secundary" type="text">
										<input placeholder="ASUNTO DE TU PREGUNTA" class="inp-text input-text_secundary"type="text">
										<a class="btn_secundary" href="">ENVIAR</a>		
									</form>							
								</div>
								<div class="col-sm-7 question">
									<textarea class="inp-text input-text_secundary" name="" id="" cols="30" rows="10" placeholder="¿CUÁL ES LA PREGUNTA?">

									</textarea>
								</div>
							</div>
						</div>
						<div class="col-sm-6 image background-image" style="background: url('<?php echo $url_image_pregunta[0]; ?>')"></div>
					</div>				
				</div>
			</div>
		</div>
	
	</div>
	<!-- Preguntas Frecuentas start -->
	<section class="facts">
		<div class="row">
			<div class="col-md-12">
				<div class="box-title-section-secundary">
					<h1 class="section-title-secundary">Preguntas Radikal Master</h1>
				</div>
			</div>
		<div class="col-md-12">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					¿Cuánto cuesta el servicio completo para mi bicicleta?
					</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
					El servicio general te cuesta $150 MXN. Incluye engrasado de masas, ajuste o engrasado del centro, engrasado de telescopio, y ajuste en cambios y rodamientos.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					¿Cuánto cuesta un ajuste de cambios?
					</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
					El Ajuste de Cambios tiene un coste de $40. Te esperamos en Plaza Centauro Local #10 Abierto de Lunes a Sábado de 10 de la mañana a 8 de la noche.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					¿En dónde están ubicados?
					</a>
					</h4>
				</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
					Que tal buenas tardes, estamos ubicados en el Plaza Centauro local #10 en la ciudad de Durango, a mano derecha de la entrada de Soriana antes Gigante con un horario de atención corrido de 11:00 a.m. a 8:00 p.m. de lunes a sábado.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					¿A qué número telefónico me puedo comunicar para saber si esta lista mi bicicleta que lleve a servicio?
					</a>
					</h4>
				</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					<div class="panel-body">
					Puedes comunicarte al  01 (618) 8-10-21-00 número partículas con atención corrida de 11:00 a.m. a 8:00 p.m. de lunes a sábado.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFive">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					¿Pueden arreglar mi bicicleta?
					</a>
					</h4>
				</div>
					<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
					<div class="panel-body">
					Claro que podemos, contamos con un servicio especializado en bicicletas, valoramos los daños sin ningún compromiso. No hacemos cambios de piezas nuevas requeridas sin tu previa autorización. Te esperamos en el Plaza Centauro local #10 en la ciudad de Durango con horario corrido de 11:00 a.m. a 8:00 p.m. de lunes a sábado.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSixth">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
					¿Cuánto cuesta la alineación de rines?
					</a>
					</h4>
				</div>
					<div id="collapseSixth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixth">
					<div class="panel-body">
					Que tal buenas tardes. La alineación de Rines tiene un coste de $40 MXN. Te esperamos en Plaza Centauro Local #10 Abierto de Lunes a Sábado de 10 de la mañana a 8 de la noche.
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Preguntas Frecuentas end -->

<?php get_footer(); ?>