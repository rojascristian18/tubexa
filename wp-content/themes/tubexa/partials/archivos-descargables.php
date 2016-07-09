<div id="archivos-descargables" class="page-content bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="body-title">Archivos Descargables</h2>
				<span class="title-line"></span>
			</div>
		</div>
		<div class="row">
			<?
				$archivos = new WP_Query( array('post_type' => 'archivosdescargables') );

				if ( $archivos->have_posts() ) {
					
					while ( $archivos->have_posts() ) { $archivos->the_post(); ?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="box">
								<? the_post_thumbnail('box',array('class' => 'img-responsive')); ?>
								<h3 class="box-title"><? the_title(); ?></h3>
								<? 	$documento = get_field('documento');
									if( $documento ): ?> 
									<a href="<?php echo $documento['url']; ?>" class="animated-normal btn-box">Descargar</a>
								<? 	endif; ?>
							</div>
						</div>
				<?	}
				}
				/* Restore original Post Data */
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>