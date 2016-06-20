<?php get_header(); 
global $wp_query;
global $no_posts_home; ?>
	<section class="main-slider">
	  	<div id="MainSlide1" class="carousel slide carousel-fade" data-ride="carousel">
	    	<!-- Indicators -->
	    	
	    	<?php if (! empty($wp_query->posts) ) : ?>
				<ol class="carousel-indicators comment_control">
					<?php foreach ($wp_query->posts as $key => $post): 
						$active = $key == 0 ? 'active' : '';?>
						<li data-target="#content-header" data-slide-to="<?php echo $key; ?>" class="comment_control-slide <?php echo $active; ?>"></li>
					<?php endforeach; ?>
				</ol>
				<ol class="carousel-indicators">
					<?php foreach ($wp_query->posts as $key => $post): 
						$active = $key == 0 ? 'active' : '';?>
						<li data-target="#MainSlide1" data-slide-to="<?php echo $key; ?>" class="<?php echo $active; ?>"></li>
					<?php endforeach; ?>
		    	</ol>
			<?php endif; ?>


	    	<!-- Carousel items -->
	    	<div class="carousel-inner">
					
				<?php if (! empty($wp_query->posts) ) :
					foreach ($wp_query->posts as $key => $post):
						$no_posts_home[] = $post->ID;
						$imagen_a = attachment_image_url($post->ID, 'slide_home'); 
						$active = $key == 0 ? 'active' : ''; ?>
						<!-- Slide 1 : Active -->
				     	<div class="item <?php echo $active; ?>">
				        	<a href="<?php echo get_the_permalink($post->ID); ?>">
				        		<img src="<?php echo $imagen_a; ?>" alt="">
				        	</a>
				        	<div class="carousel-caption">
				        	</div><!-- /.carousel-caption -->
				      	</div><!-- /Slide1 -->

					<?php endforeach;
				endif; ?>
				
	    	</div><!-- /.carousel-inner -->

	    	<!-- Controls -->
	    	<div class="control-box">
	      		<a class="left carousel-control" href="#MainSlide1" role="button" data-slide="prev">
	        		<span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
	        		<span class="sr-only">Previous</span>
	     		</a>
	      
	     		<a class="right carousel-control" href="#MainSlide1" role="button" data-slide="next">
	        		<span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
	       		 	<span class="sr-only">Next</span>
	      		</a>
	    	</div><!-- /.control-box -->
	  	</div><!-- /#MainSlide1 -->
	</section><!-- /.main-slider -->

	
	<div class="container content-box_primary">
		<div class="row">
			<div class="col-md-12">
				<div class="box-title-section-secundary">
					<h1 class="section-title-secundary">últimas noticias</h1>
				</div>
			</div>
			<div class="col-md-12 boxes_primary">
				<div class="row ">
					<?php $ultimas_notivias = new WP_Query( 
						array(
							'posts_per_page' => 4, 
							'post_type' => 'post',
							'post__not_in' => $no_posts_home
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
			<div class="col-md-12 more_box">
				<a class="btn_secundary" href="<?php echo site_url('/noticias/') ?>">Ver más</a>
			</div>
		</div>
	</div>
	<div class="container-fluid banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title-section">
					<h1 class="bnr-title-section">Lorem ipsum dolor sit amet</h1>
				</div>
				<div class="col-md-12 content-banner">
					<div class="row">
						<div class="col-md-5 description">
							<h1 class="bnr-title">Lorem ipsum dolor sit</h1>
							<p class="bnr-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nam ad possimus doloribus quis sint repellendus, praesentium facilis culpa totam.</p>
							<a class="btn_primary" href="">Ver</a>
						</div>
						<div class="col-md-7 image background-image" style="background: url('http://the-sentry.dev/wp-content/uploads/2016/04/how-to-train-your-dragon-free-printables-004-668x446.png')">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>