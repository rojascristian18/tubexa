<div class="accesorios">
	<div class="container">
	<?	
		$postQuery = array(
			'post_type' => 'page',
			'post_parent' => get_the_ID(),
			'order' => 'ASC'
		);

		$sistemas = new WP_Query( $postQuery );

		if ( $sistemas->have_posts() ) {
			while ( $sistemas->have_posts() ) { $sistemas->the_post(); ?>
				<div class="row">

					<div class="col-md-12">
						<h2 class="body-title top-margin"><? the_title(); ?></h2>
					</div>
					<div class="col-md-12">
						<table class="table custom-table">
							<th><center>Normas</center></th>
							<th><center>Tipo de Unión</center></th>
							<th><center>Aplicaciones</center></th>
							<th><center>Detalle</center></th>
							<tr class="text-left">
								<td><? the_field('normas'); ?></td>
								<td><? the_field('tipo_de_union'); ?></td>
								<td><? the_field('aplicaciones'); ?></td>
								<td>
								<? 	$imagedetalle = get_field('detalle');

									if( !empty($imagedetalle) ): ?>
										<img src="<?php echo $imagedetalle['url']; ?>" alt="<?php echo $imagedetalle['alt']; ?>"  class="img-responsive center-block" />
								<? 	endif; ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			<?	//Query tablas
				$tablasQuery = array(
					'post_type' => 'page',
					'post_parent' => get_the_ID(),
					'order' => 'ASC'
				);

				$tablas = new WP_Query( $tablasQuery );

				if ( $tablas->have_posts() ) {
					while ( $tablas->have_posts() ) { $tablas->the_post(); ?>
						<div class="row">
							<div class="col-md-12">
								<div class="panel-group" id="accordion<? the_ID();?>" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="panel<? the_ID();?>">
											<div class="col-md-10 col-sm-9 col-xs-12 text-center no-pad">
												<div class="gray-box">
												<? 	if ( !empty(get_field('serie')) ) { ?>
														<div class="col-md-2 col-xs-6">
															<? the_title(); ?>
														</div>
												<?	} ?>
												<? 	if ( !empty(get_field('serie')) ) { ?>
														<div class="col-md-10 col-xs-6">
															<strong><? the_field('serie'); ?></strong>
														</div>
												<?	}else{ ?>
														<? the_title(); ?>
												<?	} ?>
												</div>
											</div>
											<div class="col-md-2 col-sm-3 col-xs-12 text-center no-pad">
												<a role="button" data-toggle="collapse" class="btn-expandir" data-parent="#accordion<? the_ID(); ?>" href="#collapse<? the_ID(); ?>" aria-expanded="true" aria-controls="collapse<? the_ID(); ?>">
													<span>MOSTRAR TABLA</span>
													<span class="display-none">OCULTAR TABLA</span>
												</a>
											</div>
										</div>
										<div id="collapse<? the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel<? the_ID();?>">
											<div class="panel-body">
												<? 	$imagenTabla = get_field('imagen');
													if( !empty($imagenTabla) ): ?>
														<img src="<?php echo $imagenTabla['url']; ?>" alt="<?php echo $imagenTabla['alt']; ?>"  class="img-responsive center-block" />
												<? 	endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?	}
				}
				/* Restore original Post Data */
				wp_reset_postdata();
			}
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	?>
	</div>
</div>