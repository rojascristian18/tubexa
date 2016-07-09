<div class="bg-gray especificaciones">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 text-center">
				<h2 class="body-title to-normal">ESPECIFICACIONES</h2>
				<span class="title-line"></span>
				<table class="table">
					<th><center>Normas</center></th>
					<th><center>Superficie</center></th>
					<th><center>Aplicaciones</center></th>
					<tr class="text-left">
						<td><? the_field('normas'); ?></td>
						<td><? the_field('superficie'); ?></td>
						<td><? the_field('aplicaciones'); ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="zoom-image" data-toggle="modal" data-target="#especificacion_imagen">
				<?php 

					$image = get_field('imagen');

					if( !empty($image) ): ?>
						<img src="<?php echo $image['sizes']['especificaciones']; ?>" alt="<?php echo $image['alt']; ?>"  class="img-responsive center-block " />
					<?php endif; ?>
				</div>
				<label class="leyenda">Haga click para agrandar la foto</label>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="especificacion_imagen" tabindex="-1" role="dialog" aria-labelledby="especificacion_imagen">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><? if( !empty($image) ) : echo $image['title']; endif;?></h4>
			</div>
			<div class="modal-body">
				<? 	if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  class="img-responsive" data-toggle="modal" data-target="#myModal"/>

				<? 	endif; ?>
			</div>
		</div>
	</div>
</div>
