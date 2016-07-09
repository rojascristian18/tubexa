<? /* Template Name: Plantilla Revestimientos */ ?>
<? get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="body-title top-margin"><? the_title(); ?></h2>
				</div>
				<div class="col-md-12">
					<? the_content(); ?>
				</div>
			</div>
		</div>
		<div class="sep-chico"></div>
		<? get_template_part('partials/especificaciones'); ?>
		<div class="container-fluid no-pad interna-revestimientos">
			<div class="row">
				<div class="full-col-6 bg-white parent-height">
					<div class="contenedor pull-right">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2 class="body-title to-uppercase">Ventajas <? the_title(); ?></h2>
								<span class="title-line"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<? the_field('ventajas'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="full-col-6 bg-gray-light parent-height">
					<div class="contenedor">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2 class="body-title to-uppercase">Aplicación en fábrica</h2>
								<span class="title-line"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<? the_field('aplicacion_en_fabrica'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="full-col-6 bg-gray-medium parent-height">
					<div class="contenedor pull-right">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2 class="body-title to-uppercase">Aplicación en terreno</h2>
								<span class="title-line"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<? the_field('aplicacion_en_terreno'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="full-col-6 bg-gray parent-height">
					<div class="contenedor">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2 class="body-title to-uppercase">Control de calidad</h2>
								<span class="title-line"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<? the_field('control_de_calidad'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- div.container-fluid -->

	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>