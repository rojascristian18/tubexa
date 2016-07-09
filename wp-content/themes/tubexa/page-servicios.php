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
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="inside-box">
					<div class="inside-box-image text-center" id="soldadura">
						<h3 class="inside-box-title to-uppercase">Asesoría Pre - Venta</h3>
						<div class="red-line"></div>
					</div>
					<p class="text-center"><? the_field('pre_venta'); ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="inside-box">
					<div class="inside-box-image text-center" id="extremos">
						<h3 class="inside-box-title to-uppercase">Servicio Post - Venta</h3>
						<div class="red-line"></div>
					</div>
					<p class="text-center"><? the_field('post_venta'); ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="inside-box">
					<div class="inside-box-image text-center" id="extremos">
						<h3 class="inside-box-title to-uppercase">Otros</h3>
						<div class="red-line"></div>
					</div>
					<p class="text-center"><? the_field('otros'); ?></p>
				</div>
			</div>
			</div>
		</div>

	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>

