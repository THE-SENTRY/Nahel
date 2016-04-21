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
		<footer class="container-fluid footer">
			<div class="container footer-content">
				<div class="col-md-2 footer-section">
					<img class="footer-logo"src="<?php echo THEMEPATH; ?>images/logo_footer.svg" alt="">
				</div>
				<div class="col-md-3 footer-section">
					<h1 class="footer-titles">Quienes somos</h1>
					<?php $antecedentes = get_page_by_path('antecentes'); ?>
					<p class="footer-subtitle"><?php echo wp_trim_words( $antecedentes->post_content, 20 ); ?></p>
					<a href="<?php echo site_url('/quienes-somos/'); ?>">Leer mas..</a>
				</div>
				<div class="col-md-3 footer-section contact">
					<h1 class="footer-titles">Contacto</h1>
					<p class="footer-subtitle">Lorem ipsum dolor sit amet, consectetur</p>
					<p class="footer-subtitle">Lorem ipsum dolor sit amet, consectetur</p>
					<div class="social-media">
						<span class="fa-stack fa-lg icon twitter">
  							<i class="fa fa-square fa-stack-2x background"></i>
  							<i class="fa fa-twitter fa-stack-1x fa-inverse color"></i>
						</span>						
						<span class="fa-stack fa-lg icon facebook">
  							<i class="fa fa-square fa-stack-2x background"></i>
  							<i class="fa fa-facebook fa-stack-1x fa-inverse color"></i>
						</span>
						<span class="fa-stack fa-lg icon youtube">
  							<i class="fa fa-square fa-stack-2x background"></i>
  							<i class="fa fa-youtube-play fa-stack-1x fa-inverse color"></i>
						</span>

					</div>
					
				</div>
				<div class="col-md-4 footer-section newsletter">
					<h1 class="footer-titles">Newsletter</h1>
					<p class="footer-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					<input class="inp-text input-text_secundary register-correo" type="text" placeholder="Ingresa tu correo"><a class="btn_secundary" href="">Empezar</a>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>