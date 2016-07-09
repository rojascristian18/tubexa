<? get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="body-title top-margin">Servicios y Asesorías</h2>
				</div>
				<div class="col-md-12">
					<? the_content(); ?>
				</div>
			</div>
		</div>
		<div class="spec-container bg-gray">
			<div class="container">
				<div class="row">
					<? 
						
						$recomendaciones = get_field('detalles');
						
						$arrayrecomendaciones = explode('||', $recomendaciones);

						if ( ! empty($recomendaciones) ) {
							foreach ($arrayrecomendaciones as $ventaja) : ?>
								<div class="col-md-3 col-sm-3 col-xs-12 text-center box-spec">
									<p class="spec-p"><?=$ventaja; ?></p>
									<img src="<?=get_template_directory_uri();?>/public/img/internas/image2.png" class="img-responsive center-block">
								</div>
						<?	endforeach;
						}
					?>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="sep-chico"></div>
						<p><? the_field('detalles_texto'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<? get_template_part('partials/clientes'); ?>
		<? get_template_part('partials/principales-proyectos'); ?>
	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>