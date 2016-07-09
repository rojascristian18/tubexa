<div class="aplicaciones">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="body-title to-uppercase">Aplicaciones</h2>
				<span class="title-line"></span>
			</div>
		</div>
		<? 	$aplicaciones = new WP_Query( array( 'post_type' => 'page','post_parent' => get_the_ID() ,'order' => 'ASC') );
			$contador = 2;
			if ( $aplicaciones->have_posts() ) : while ( $aplicaciones->have_posts() ) : $aplicaciones->the_post(); ?>
			<? 	if ($contador%2 == 0) { ?>
					<div class="row">
						<div class="col-md-12">
							<div class="aplicaciones-box bg-gray">
								<div class="aplicaciones-image">
									<? the_post_thumbnail( 'aplicaciones', array('class' => 'img-responsive center-block') ); ?>
									<div class="hover">
										<h3 class="aplicacion-box-title text-center"><? the_title(); ?></h3>
										<div class="red-line"></div>
									</div>
								</div>
								<div class="aplicaciones-content">
									<h4 class="aplicaciones-title"><? the_title(); ?></h4>
									<? the_content(); ?>
								</div>
							</div>
						</div>
					</div>
			<?	}else{ ?>
					<div class="row">
						<div class="col-md-12">
							<div class="aplicaciones-box bg-gray">
								<div class="aplicaciones-image pull-right">
									<? the_post_thumbnail( 'aplicaciones', array('class' => 'img-responsive center-block') ); ?>
									<div class="hover">
										<h3 class="aplicacion-box-title text-center"><? the_title(); ?></h3>
										<div class="red-line"></div>
									</div>
								</div>
								<div class="aplicaciones-content">
									<h4 class="aplicaciones-title"><? the_title(); ?></h4>
									<? the_content(); ?>
								</div>
							</div>
						</div>
					</div>
			<?	}  ?>
			<? $contador++; ?>
		<?	endwhile;
			endif;
		?>
	</div>
</div>