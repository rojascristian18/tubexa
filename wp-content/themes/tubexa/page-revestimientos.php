<? get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="body-title top-margin">Introducción</h2>
			</div>
			<div class="col-md-12">
				<? the_content(); ?>
			</div>
		</div>
	</div>
	<div class="sep-normal"></div>
	
	<? get_template_part('partials/revestimientos'); ?>
	
	<div class="spec-container bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="body-title to-normal">Existen algunas recomendaciones generales para la aplicación de estos revestimientos en terreno:
</h2>
					<span class="title-line"></span>
				</div>
			</div>
			<div class="row">
				<? 
					
					$recomendaciones = get_field('recomendaciones');
					
					$arrayrecomendaciones = explode('||', $recomendaciones);

					if ( count($arrayrecomendaciones) > 0 ) {
						foreach ($arrayrecomendaciones as $ventaja) : ?>
							<div class="col-md-4 col-sm-4 col-xs-12 text-center box-spec">
								<p class="spec-p"><?=$ventaja; ?></p>
								<img src="<?=get_template_directory_uri();?>/public/img/internas/image2.png" class="img-responsive center-block">
							</div>
					<?	endforeach;
					}
				?>
			</div>
		</div>
	</div>
	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>