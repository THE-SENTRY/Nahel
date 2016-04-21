<?php get_header(); 
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$ultimas_noticias = new WP_Query( 
	array(
		'posts_per_page' => 6, 
		'post_type' => 'post'
	)
);?>

	<div class="container-fluid box-title-section-primary">
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1 class="section-title-primary">últimas noticias</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container content-box_primary">
		<div class="row">
			<div class="col-md-12 boxes_primary">
				<div class="row ">
					
					<?php if ( $ultimas_noticias->have_posts() ) :
						while ( $ultimas_noticias->have_posts() ) : $ultimas_noticias->the_post(); 
							$imagen = attachment_image_url($post->ID, 'medium');
							$date = getDateTransform(date("Y-m-d", strtotime($post->post_date))); ?>

							<div class="col-md-6">
								<div class="box box_primary">
									<a class="box-link" href="<?php echo the_permalink(); ?> ">
										<div class="row box_primary-content">
											<div class="col-sm-6 image background-image" style="background: url('<?php echo $imagen; ?>')"></div>
											<div class="col-sm-6 description">
												<h1 class="box_primary-title"><?php the_title(); ?></h1>
												<p><kbd><i class="fa fa-clock-o"></i> <?php echo $date[0].'/'.$date[1].'/'.$date[2] ?></kbd></p>
												<p class="box_primary-subtitle"><?php echo wp_trim_words( $post->post_content, 20 ); ?></p>
											</div>
										</div>
									</a>
								</div>
							</div>

						<?php endwhile; 
					endif;
					wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
	</div>

	<div class="pagination-content">
		<?php if($ultimas_noticias->max_num_pages > 1):
			$url = site_url('/noticias/');
			pagenavi($pagina,$ultimas_noticias->max_num_pages, $url, true); ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>