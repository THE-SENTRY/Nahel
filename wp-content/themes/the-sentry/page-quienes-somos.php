<?php get_header(); ?>	
	<div class="container-fluid box-title-section-primary">
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1 class="section-title-primary">Quienes somos | nahel</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid content-box_secundary">
		<div class="row">
			<div class="col-md-12 boxes_secundary">
				<div class="box_secundary">
					<div class="row box_secundary-content">
						<?php $antecedentes = get_page_by_path('antecentes');
						$imagen = attachment_image_url($antecedentes->ID, 'medium'); ?>
						<div class="col-sm-6 description">
							<blockquote class="box_secundary-title"><?php echo $antecedentes->post_title ?></blockquote>
							
							<div class="box_secundary-subtitle">
								<?php echo wpautop($antecedentes->post_content); ?>
							</div>
						</div>
						<div class="col-sm-6 image background-image" style="background: url('<?php echo $imagen; ?>')"></div>
					</div>				
				</div>
			</div>
			<div class="col-md-12 boxes_secundary two">
				<div class="box_secundary">
					<div class="row box_secundary-content">
						<?php $mision = get_page_by_path('mision-y-vision');
						$imagen_mision = attachment_image_url($mision->ID, 'medium'); ?>
						<div class="col-sm-6 description">
							<blockquote class="box_secundary-title"><?php echo $mision->post_title ?></blockquote>
							<div class="box_secundary-subtitle">
								<?php echo wpautop($mision->post_content); ?>
							</div>
						</div>
						<div class="col-sm-6 image background-image" style="background: url('<?php echo $imagen_mision; ?>')"></div>
					</div>				
				</div>
			</div>
		</div>
	
	</div>


<?php get_footer(); ?>