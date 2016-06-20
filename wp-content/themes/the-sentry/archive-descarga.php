<?php get_header();
global $wp_query;
$descargas = ! empty($wp_query->posts) ? getDownloadsOrderDate($wp_query->posts) : array();  ?>
	<div class="container-fluid box-title-section-primary">
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1 class="section-title-primary">Descargas</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container download">
		<div class="row content-download">
			<?php if( ! empty($descargas) ):
				$count = 0;
				foreach ($descargas as $key => $descargasMes) :
					foreach ($descargasMes as $key => $descarga):
						if ($count == 0): ?>
							<div class="col-md-12">
								<div class="box box-subtitle-section-primary download-title">
									<div class="download-date">
										<p class="month download-text"><?php echo $descarga['mes']; ?></p>
										<p class="year download-text"><?php echo $descarga['ano']; ?></p>				
									</div>
									<div class="download-number-archive">
										<p class="num_archive download-text"><?php echo count($descargasMes); ?> archivos</p>
									</div>			
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
						<?php endif; ?>
							

						<div class="col-sm-6">
							<div class="box download_archive">
								<div class="row container-archive">
									<div class="col-md-4">
										<p class="dowload_archive-name"><?php echo $descarga['name']; ?></p>	
									</div>
									<div class="col-md-4 published">
										<p class="dowload_archive-published">Creado el <?php echo date("Y-m-d", strtotime($descarga['date'])); ?></p>
									</div>
									<div class="col-md-4">
										<a class="btn_secundary" href="<?php echo $descarga['url']; ?>" target="_blank">Descargar <i class="fa fa-cloud-download"></i></a>
									</div>
								</div>					
							</div>
						</div>

						<?php $count++; 
					endforeach;
					echo '</div></div>';
					$count = 0;
				endforeach;
			
			endif; ?>
			
		</div>
	</div>
	
<?php get_footer(); ?>