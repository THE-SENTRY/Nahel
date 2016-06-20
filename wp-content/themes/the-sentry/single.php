<?php get_header(); 
the_post(); 
$date = getDateTransform(date("Y-m-d", strtotime($post->post_date)));
$imagen = attachment_image_url($post->ID, 'medium'); ?>
	<div class="container-fluid box-title-section-primary">
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1 class="section-title-primary"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container single">
		<div class="row box-single">
			<div class="col-sm-5 box box-single-content">
				<h1 class="single-title"><?php the_title(); ?></h1>
				<p><kbd><i class="fa fa-clock-o"></i> <?php echo $date[0].'/'.$date[1].'/'.$date[2] ?></kbd></p>
				<div class="single-content"><?php the_content(); ?></div>
				<div class="single-quote">
					<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero omnis vitae provident quibusdam delectus expedita cum at tenetur excepturi quia, deleniti repudiandae animi, saepe doloremque illum facere ea? Laborum, dolores!</em></p>
				</div>
				<h1 class="single-subtitle">subtitulo</h1>
				<p class="single-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cumque quo nostrum possimus reiciendis hic fugit deleniti ratione excepturi magni consequatur, dolor sint repudiandae saepe, enim dignissimos, odio provident voluptate.</p>
			</div>
			<div class="col-sm-7 box box-single-image background-image" style="background: url('<?php echo $imagen; ?>')"></div>
				
		</div>
	</div>
	<div class="container">
		<div class="row box box-subtitle-section-primary">
			<div class="col-md-12">
				<h1 class="section-title-primary">noticias relacionadas</h1>			
			</div>
		</div>
	</div>
	<div class="container content-box_primary">
		<div class="row">
			<div class="col-md-12 boxes_primary">
				<div class="row ">
					<?php $ultimas_notivias = new WP_Query( 
						array(
							'posts_per_page' => 4, 
							'post_type' => 'post',
							'post__not_in' =>array($post->ID)
						)
					);

					if ( $ultimas_notivias->have_posts() ) :
						while ( $ultimas_notivias->have_posts() ) : $ultimas_notivias->the_post(); 
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

<?php get_footer(); ?>