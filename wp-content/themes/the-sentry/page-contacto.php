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

	<div class="container-fluid title-sucursales">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div>
							<img class="icon" src="<?php echo THEMEPATH; ?>images/iconos-01.svg" alt=""> <h1 class="title">Plazas</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid sucursales">
			<div class="container content-sucursales">
				<?php $plazas = new WP_Query( 
					array(
						'posts_per_page' => -1, 
						'post_type' => 'plaza'
					)
				);
				$posts_plaza = ! empty($plazas->posts) ? array_chunk($plazas->posts, 4) : '';
				if ( ! empty($posts_plaza) ) :
					foreach ($posts_plaza as $key => $posts):
						echo "<div class='row'>";
						foreach ($posts as $key => $post):
							$telefono = get_post_meta( $post->ID, 'telefono_sucursal', true );
							$direccion = get_post_meta( $post->ID, 'direccion_sucursal', true ); ?>
							<div class="sucursal col-md-3">
								<div class="container-dates-sucursal">
									<h1><?php the_title(); ?></h1>
									<p>Llama al: <?php echo $telefono; ?></p>
									<p class="direccion"><?php echo $direccion; ?></p>				
								</div>
							</div>
						<?php endforeach;
						echo "</div>";
					endforeach; 
				endif;
				wp_reset_postdata(); ?>
				
			</div>
		</div>
		<div class="container-fluid title-sucursales">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div>
							<img class="icon" src="<?php echo THEMEPATH; ?>images/iconos-02.svg" alt=""> <h1 class="title">Concesionarias</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid sucursales">
			<div class="container content-sucursales">
				<?php $concesionarias = new WP_Query( 
					array(
						'posts_per_page' => -1, 
						'post_type' => 'concesionaria'
					)
				);
				$posts_concesionaria = ! empty($concesionarias->posts) ? array_chunk($concesionarias->posts, 4) : '';
				if ( ! empty($posts_concesionaria) ) :
					foreach ($posts_concesionaria as $key => $posts):
						echo "<div class='row'>";
						foreach ($posts as $key => $post):
							$telefono = get_post_meta( $post->ID, 'telefono_sucursal', true );
							$direccion = get_post_meta( $post->ID, 'direccion_sucursal', true ); ?>
							<div class="sucursal col-md-3">
								<div class="container-dates-sucursal">
									<h1><?php the_title(); ?></h1>
									<p>Llama al: <?php echo $telefono; ?></p>
									<p class="direccion"><?php echo $direccion; ?></p>				
								</div>
							</div>
						<?php endforeach;
						echo "</div>";
					endforeach; 
				endif;
				wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="container-fluid title-sucursales">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div>
							<img class="icon" src="<?php echo THEMEPATH; ?>images/iconos-03.svg" alt=""> <h1 class="title">Tiendas</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid sucursales">
			<div class="container content-sucursales">
				<?php $tiendas = new WP_Query( 
					array(
						'posts_per_page' => -1, 
						'post_type' => 'tienda'
					)
				);
				$posts_tienda = ! empty($tiendas->posts) ? array_chunk($tiendas->posts, 4) : '';
				if ( ! empty($posts_tienda) ) :
					foreach ($posts_tienda as $key => $posts):
						echo "<div class='row'>";
						foreach ($posts as $key => $post):
							$telefono = get_post_meta( $post->ID, 'telefono_sucursal', true );
							$direccion = get_post_meta( $post->ID, 'direccion_sucursal', true ); ?>
							<div class="sucursal col-md-3">
								<div class="container-dates-sucursal">
									<h1><?php the_title(); ?></h1>
									<p>Llama al: <?php echo $telefono; ?></p>
									<p class="direccion"><?php echo $direccion; ?></p>				
								</div>
							</div>
						<?php endforeach;
						echo "</div>";
					endforeach; 
				endif;
				wp_reset_postdata(); ?>
			</div>
		</div>

<?php get_footer(); ?>