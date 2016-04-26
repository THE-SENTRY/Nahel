<?php get_header(); the_post();
$fax_contacto = get_post_meta( $post->ID, 'fax_contacto', true ); 
$imagen = attachment_image_url($post->ID, 'medium'); ?>

	<div class="container-fluid box-title-section-primary">
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1 class="section-title-primary">Contacto</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid content-box_secundary">
		<div class="row">
			<div class="col-md-12 boxes_secundary two">
				<div class="box_secundary">
					<div class="row box_secundary-content contactanos">
						<div class="col-sm-6 description">
							<div class="row">
								<div class="col-md-12">
									<blockquote class="box_secundary-title"><?php echo get_post_meta( $post->ID, 'texto_contacto', true ); ?></blockquote>
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
						<div class="col-sm-6 image background-image" style="background: url('<?php echo $imagen; ?>')">
							<div class="layer-contact">
								<div class="layer-contact_information">
									<div class="paragraph phone">
										<div class="icon">
											<span class="fa-stack fa-lg">
									  			<i class="fa fa-square-o fa-stack-2x"></i>
									  			<i class="fa fa-phone fa-stack-1x"></i>
											</span>
										</div>
										<div class="content">
											<p>LLama al:</p>
											<strong>
												<?php echo get_post_meta( $post->ID, 'telefono_contacto', true ); ?>
												<br>
												<?php if ($fax_contacto != ''):
													echo 'Fax '.$fax_contacto;
												endif; ?>
												
											</strong>
										</div>
									</div>

									<div class="paragraph mail">
										<div class="icon">
											<span class="fa-stack fa-lg">
									  			<i class="fa fa-square-o fa-stack-2x"></i>
									  			<i class="fa fa-envelope fa-stack-1x"></i>
											</span>
										</div>
										<div class="content">
											<p>Envianos un mail a:</p><strong><?php echo get_post_meta( $post->ID, 'mail_contacto', true ); ?></strong>
										</div>
									</div>
									<div class="paragraph address">
										<div class="icon">
											<span class="fa-stack fa-lg">
									  			<i class="fa fa-square-o fa-stack-2x"></i>
									  			<i class="fa fa-map-marker fa-stack-1x"></i>
											</span>
										</div>
										<div class="content">
											<p>Dirección:</p><strong><?php echo get_post_meta( $post->ID, 'direccion_contacto', true ); ?></strong>									
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid box-title-section-primary">
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1 class="section-title-primary text-center">Sucursales</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid sucursales">
		<div class="container content-sucursales">
			<?php $sucursales = new WP_Query( 
				array(
					'posts_per_page' => -1, 
					'post_type' => 'sucursal'
				)
			);
			$i = 0;
			$total = $sucursales->found_posts - 1;
			if ( $sucursales->have_posts() ) :
				while ( $sucursales->have_posts() ) : $sucursales->the_post(); 
					$imagen = attachment_image_url($post->ID, 'medium'); 
					if($i%4 == 0):
					    echo $i > 0 ? "</div>" : "";
					    echo "<div class='row'>";
					elseif($total == $i):
						echo "</div>";
					endif; ?>
					<div class="sucursal col-md-3">
						<h1>Lorem ipsum</h1>
						<p>Llama al:</p>
						<strong>Potasio Nº 119 Cd.Industrial C.P.34208.Durango,Dgo.</strong>
					</div>
				<?php $i++; endwhile; 
			endif;
			wp_reset_postdata(); ?>
			
		</div>
	</div>

<?php get_footer(); ?>