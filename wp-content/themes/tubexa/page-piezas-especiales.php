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
		</div>
		<div class="revestimientos">
			<div class="container">
				<div class="row">
				<? 	$piezas = new WP_Query( array( 'post_type' => 'page','post_parent' => get_the_ID() ,'order' => 'ASC') );
					if ( $piezas->have_posts() ) : while ( $piezas->have_posts() ) : $piezas->the_post(); ?>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="box-image top-margin">
								<? the_post_thumbnail( 'revestimientos', array('class' => 'img-responsive center-block') ); ?>
								<div class="hover">
									<h3 class="hover-box-title text-center to-uppercase"><? the_title(); ?></h3>
									<div class="red-line"></div>
								</div>
							</div>
							<a href="<? the_permalink(); ?>" class="animated-normal btn-box">Ver</a>
						</div>
				<?	endwhile;
					endif;

					wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>

