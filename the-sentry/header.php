<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta http-equiv="cleartype" content="on">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<?php wp_head(); ?>
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<nav class="navigation navbar navbar-menu">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="slideout-toggle navbar-toggle collapsed">
		                <i class="fa fa-bars"></i>
		            </button>
		        </div><!-- navbar-header -->

		        <div id="navbar" class="navbar-collapse collapse">
		            <div class="row  navigation-content">
		                <ul class="col-md-12 nav navbar-nav nav-item">
		                	<li class="item"><a href="<?php echo site_url('/'); ?>"><img class="nav_logo" src="<?php echo THEMEPATH; ?>images/logo.svg" alt=""></a></li>
		                    <li class="item"><a class="nav_section" href="<?php echo site_url('/'); ?>">inicio</a></li>
		                    <li class="item"><a class="nav_section" href="<?php echo site_url('/quienes-somos/'); ?>">quienes somos</a></li>
		                    <li class="item"><a class="nav_section" href="<?php echo site_url('/noticias/'); ?>">noticias</a></li>
		                    <li class="item"><a class="nav_section" href="radikal.html">radikal</a></li>
		                    <li class="item"><a class="nav_section" href="download.html">descargas</a></li>
		                    <li class="item"><a class="nav_section" href="contact.html">contacto</a></li>
		                </ul><!-- .nav -->
		                <div class="nav-item nav_search">
		                	<p>Buscar</p><i class="icon fa fa-search"></i>
		                </div>
		            </div>
		        </div><!-- #navbar .nav-collapse -->

		    </div><!-- .container -->
		</nav>
