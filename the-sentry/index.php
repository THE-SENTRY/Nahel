<?php get_header(); 
global $wp_query;
global $no_posts_home; ?>
	<div id="content-header" class="carousel-fade carousel slide" data-ride="carousel">
		<div class="carousel-inner row tweets" role="listbox">
			<?php if (! empty($wp_query->posts) ) : ?>
				<ol class="carousel-indicators comment_control">
					<?php foreach ($wp_query->posts as $key => $post): 
						$active = $key == 0 ? 'active' : '';?>
						<li data-target="#content-header" data-slide-to="<?php echo $key; ?>" class="comment_control-slide <?php echo $active; ?>"></li>
					<?php endforeach; ?>
				</ol>
			<?php endif;
			if (! empty($wp_query->posts) ) :
				foreach ($wp_query->posts as $key => $post):
					$no_posts_home[] = $post->ID;
					$imagen_a = attachment_image_url($post->ID, 'full'); 
					$active = $key == 0 ? 'active' : ''; ?>

					<div class="item <?php echo $active; ?> container-fluid background-image header" role="listbox" style="background-image: url('<?php echo $imagen_a; ?>')">
						<div class="container">
							<div class="col-sm-4 header-description">
								<h1 class="header-title"><?php echo $post->post_title; ?></h1>
								<p class="header-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores velit.</p>
								<a class="btn_secundary" href="<?php echo get_the_permalink($post->ID); ?>">Ver</a>
							</div>

							<div class="col-sm-2 col-md-offset-5">
								
							</div>
						</div>
					</div>

				<?php endforeach;
			endif; ?>
			
			 <!--  <a class="left carousel-control" href="#content-header" role="button" data-slide="prev">

			  </a>
			  <a class="right carousel-control" href="#content-header" role="button" data-slide="next">

			  </a>		 -->
		</div>
	</div>
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
							$imagen = attachment_image_url($post->ID, 'full');
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
						<div class="col-md-7 image background-image" style="background: url('http://imagenes.4ever.eu/data/download/deporte/ciclismo/bicicleta-de-montana,-bosque,-huellas-en-la-nieve-152861.jpg')">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid comments">
		<div class="container">
			<div id="content-tweets" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				<ol class="carousel-indicators comment_control">
					<li data-target="#content-tweets" data-slide-to="0" class="comment_control-slide active"></li>
					<li data-target="#content-tweets" data-slide-to="1" class="comment_control-slide"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner row tweets" role="listbox">
					<div class="col-md-12 item comment active">
						<i class="comment_icon  fa fa-twitter"></i>
						<p class="coment_icon-text">@NAHEL</p>
						<p class="comment_user_time"><kbd><i class="fa fa-twitter-square"></i> Usuario/hace <i class="fa fa-clock-o"></i> 4 minutos</kbd></p>
						<p class="comment_publication">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum enim neque, sed interdum quam <br> consectetur id. Fusce non metus metus.</p>
					</div>
					<div class="col-md-12 item comment">
						<i class="comment_icon  fa fa-twitter"></i>
						<p class="coment_icon-text">@NAHEL</p>
						<p class="comment_user_time"><kbd><i class="fa fa-twitter-square"></i> Usuario/hace <i class="fa fa-clock-o"></i> 4 minutos</kbd></p>
						<p class="comment_publication">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum enim neque, sed interdum quam <br> consectetur id. Fusce non metus metus.</p>
					</div>
				</div>
			</div>
		</div>			
	</div>
<?php get_footer(); ?>