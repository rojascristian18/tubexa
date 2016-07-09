<div class="page-content sucursales">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="body-title">SUCURSALES POR ZONAS</h2>
				<span class="title-line"></span>
			</div>
		</div>
		<div class="row">
			<?	
			$zonas = get_categories( array('taxonomy' => 'cat_sucursales', 'hide_empty'   => 0,'orderby' =>'ID','order' => 'ASC') );
			
			foreach ( $zonas as $zona ) { ?>
			<div class="col-md-12">
			    <div class="panel-group" id="accordion<? echo $zona->slug; ?>" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="panel<?echo $zona->slug;?>">
							<div class="col-md-10 col-sm-9 col-xs-12 text-center no-pad">
								<div class="gray-box">
									<? echo $zona->name; ?>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-12 text-center no-pad">
								<a role="button" data-toggle="collapse" class="btn-expandir" data-parent="#accordion<?echo $zona->slug; ?>" href="#collapse<?echo $zona->slug; ?>" aria-expanded="true" aria-controls="collapse<? the_ID(); ?>">
									<span>MOSTRAR TABLA</span>
									<span class="display-none">OCULTAR TABLA</span>
								</a>
							</div>
						</div>
						<div id="collapse<?echo $zona->slug; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel<?echo $zona->slug; ?>">
							<div class="panel-body">
								<div class="col-md-12">
									<table class="tabla-contenedora">
										<tr>
									<?
									$contador = 0;

									$args = array(
										'post_type' => 'sucursal',
										'tax_query' => array(
									    	array(
									    		'taxonomy' => $zona->taxonomy,
									    		'terms' => $zona->term_id
									     	)
									  	)
									);
									$sucursales = new WP_Query( $args );
									if ( $sucursales->have_posts() ) : while ( $sucursales->have_posts() ) : $sucursales->the_post(); ?>
									<? 	if( $contador%4 == 0 ) {
											echo "</tr>";
											echo "<tr>";
										}?>
										<td>
										<table class="table custom-table sucursales-tabla">
											<th><center><? the_field('ciudad'); ?></center></th>
											<tr>
												<td>
													<? if( !empty(get_field('direccion')) ): the_field('direccion'); endif; ?><br>
													<? if( !empty(get_field('telefono')) ): echo "Teléfono: " . get_field('telefono'); endif; ?><br>
													<? if( !empty(get_field('fax')) ): echo "Fax: " . get_field('fax'); endif; ?><br>
													<? if( !empty(get_field('email')) ): echo "Email: " . get_field('email'); endif; ?><br>
												</td>
											</tr>
										</table>
										</td>
								<?	
									$contador++;

									endwhile;
									endif;

									/* Restore original Post Data */
									wp_reset_postdata();
								?>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?	}	?>
	</div>
</div>