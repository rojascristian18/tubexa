<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?=bloginfo('description'); ?>">
	<meta name="keywords" content="<?=get_site_config('palabras_claves');?>">
	<meta name="author" content="Reach-Latam">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title> <? if( is_front_page() ) { echo 'Inicio'; }else{ wp_title(''); } ?> | <?= bloginfo('site_title'); ?></title>
	<? wp_head(); ?>
	<style type="text/css">
		div.pre-loader {position: fixed;top: 0;bottom: 0;right: 0;left: 0;z-index: 1000;background-color: #fff;height: 100%;}
	</style>
</head>
<body>
<div class="pre-loader"><span class="left"></span><span class="right"></span></div>
<nav class="navbar-site">
	<div class="containe-fluid" id="menu-container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-header" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-logo" href="<?= bloginfo('url'); ?>">
				<?
					$image = get_site_config('logo');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive logo" />

				<?	endif; ?>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<?php
														
				wp_nav_menu(array(
				'menu'              => 'Menú Header',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'		=> 'menu-header',
				'menu_class'        => 'nav navbar-nav')
				);
		?>
		<!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<? 	
	$custom_class = "";

	if (is_front_page() ) {
		get_template_part('partials/banner');
	}else{
		if ( is_archive() ) {
			get_template_part('partials/banner-archive');
		}else{
			get_template_part('partials/banner-internas');
		}
		$custom_class = "inside-page";
	}
?>
<div class="page <?=$custom_class; ?>">
<? get_template_part('partials/form'); ?>

