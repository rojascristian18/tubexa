<? get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="body-title top-margin">Visión</h2>
				</div>
				<div class="col-md-12">
					<p><? the_field('vision'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 class="body-title top-margin">Misión</h2>
				</div>
				<div class="col-md-12">
					<p><? the_field('mision'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="inside-box">
						<div class="inside-box-image text-center" id="calidad">
							<h3 class="inside-box-title">CALIDAD</h3>
							<div class="red-line"></div>
						</div>
						<? the_field('calidad'); ?>
					</div>
					<h2 class="body-title top-margin">Certificación</h2>
					<div class="certificacion">
						<div class="certificacion-box">
						<? 	$certificacion1 = get_field('certificacion_1');
							if( $certificacion1 ): ?> 
								<img src="<? the_field('imagen_certificacion_1'); ?>" class="img-responsive center-block">
								<a class="animated-normal btn-box" data-target="#certificacion1" data-toggle="modal">Ver</a>
								<div class="modal fade" tabindex="-1" role="dialog" id="certificacion1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<img src="<?php echo $certificacion1; ?>" class="img-responsive center-block">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
						<? 	endif; ?>
						</div>
					</div><!--
					--><div class="certificacion">
						<div class="certificacion-box">
						<? 	$certificacion2 = get_field('certificacion_2');
							if( $certificacion2 ): ?>
								<img src="<? the_field('imagen_certificacion_2'); ?>" class="img-responsive center-block">
								<a class="animated-normal btn-box" data-target="#certificacion2" data-toggle="modal">Ver</a>
								<div class="modal fade" tabindex="-1" role="dialog" id="certificacion2">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<img src="<?php echo $certificacion2; ?>" class="img-responsive center-block">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
						<? 	endif; ?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="inside-box">
						<div class="inside-box-image text-center" id="instalaciones">
							<h3 class="inside-box-title">INSTALCACIONES</h3>
							<div class="red-line"></div>
						</div>
						<? the_field('instalaciones'); ?>
					</div>
				</div>
			</div>
		</div>
		<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>