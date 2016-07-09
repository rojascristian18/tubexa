<div id="soluciones-integrales" class="page-content bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="body-title">Soluciones Integrales</h2>
				<span class="title-line"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 text-center">
				<? the_post(); ?>
				<? the_content(); ?>
			</div>
		</div>
	</div>
</div>
<div class="page-content">
	<div class="container">
		<div class="row">
			<?	
				$postQuery = array(
					'post_type' => 'page',
					'post__in' => array(62,64,66,68,38,44,40,42)
				);

				$archivos = new WP_Query( $postQuery );


				if ( $archivos->have_posts() ) {
					
					while ( $archivos->have_posts() ) { $archivos->the_post(); ?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="box">
								<? the_post_thumbnail('box',array('class' => 'img-responsive')); ?>
								<h3 class="box-title"><? the_title(); ?></h3>
								
								<a href="<?php echo get_permalink(); ?>" class="animated-normal btn-box">Ver</a>
								
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