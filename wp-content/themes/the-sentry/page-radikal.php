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

<?php get_footer(); ?>