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
						<h3 class="inside-box-title">SOLDADURA</h3>
						<div class="red-line"></div>
					</div>
					<p class="text-center"><? the_field('soldadura'); ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="inside-box">
					<div class="inside-box-image text-center" id="extremos">
						<h3 class="inside-box-title">EXTREMOS</h3>
						<div class="red-line"></div>
					</div>
					<p class="text-center"><? the_field('extremos'); ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="inside-box">
					<div class="inside-box-image text-center" id="controles-de-calidad">
						<h3 class="inside-box-title">CONTROLES <span class="block">DE CALIDAD</span></h3>
						<div class="red-line"></div>
					</div>
					<p class="text-center"><? the_field('controles_de_calidad'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="spec-container bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="body-title to-uppercase">Fabricación helecoidal y sus ventajas</h2>
					<span class="title-line"></span>
				</div>
			</div>
			<div class="row">
				<? 
					
					$ventajas = get_field('ventajas');
					
					$arrayVentajas = explode('||', $ventajas);

					if ( count($arrayVentajas) > 0 ) {
						foreach ($arrayVentajas as $ventaja) : ?>
							<div class="col-md-3 col-sm-6 col-xs-12 text-center box-spec">
								<p class="spec-p"><?=$ventaja; ?></p>
								<img src="<?=get_template_directory_uri();?>/public/img/internas/image2.png" class="img-responsive center-block">
							</div>
					<?	endforeach;
					}
				?>
			</div>
			<div class="sep-normal"></div>
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12 text-right">
					<h4 class="ventajas-subtitle">Manual técnico - Cañerías con soldadura helicoidal (PDF)</h4>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 text-center">
					<?  $manual_tecnico = get_field('manual_tecnico');
						if( $manual_tecnico ): ?>
							<a href="<?=$manual_tecnico['url']?>" title="<?=$manual_tecnico['title']?>" target="_blank" class="animated-normal btn-box">DESCARGAR</a>
					<?  endif; ?>
				</div>
			</div>
		</div>
	</div>
	<? endwhile; ?>
	<? endif; ?>
	<div class="sep-normal"></div>
	<? get_template_part('partials/aplicaciones'); ?>
	<div class="sep-normal"></div>
<? get_footer(); ?>