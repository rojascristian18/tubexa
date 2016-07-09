<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel-group" id="accordion-encargados" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="panel-encargados">
						<div class="col-md-10 col-sm-9 col-xs-12 text-center no-pad">
							<div class="gray-box">
								Contacto por Cargo
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-12 text-center no-pad">
							<a role="button" data-toggle="collapse" class="btn-expandir" data-parent="#accordion-encargados" href="#collapse-encargados" aria-expanded="true" aria-controls="collapse<? the_ID(); ?>">
								<span>MOSTRAR TABLA</span>
								<span class="display-none">OCULTAR TABLA</span>
							</a>
						</div>
					</div>
					<div id="collapse-encargados" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel-encargados">
						<div class="panel-body">
							<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
								<table class="table custom-table">
										<th><center>Nombre</center></th>
										<th><center>Cargo</center></th>
										<th><center>E-mail</center></th>
								<?	
								$encargados = new WP_Query( array('post_type' => 'encargado', 'posts_per_page' => -1, 'order' => 'ASC') );
								if ( $encargados->have_posts() ) : while ( $encargados->have_posts() ) : $encargados->the_post(); ?>
									<tr>
										<td><b><? the_field('nombre'); ?></b></td>
										<td><? the_field('cargo'); ?></td>
										<td><a href="mailto:<? the_field('email'); ?>"><u><? the_field('email'); ?></u></a></td>
									</tr>
							<?	endwhile;
								endif;

								/* Restore original Post Data */
								wp_reset_postdata();
							?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sep-normal"></div>