<div class="revestimientos">
	<div class="container">
		<div class="row">
		<? 	$revestimientos = new WP_Query( array( 'post_type' => 'page','post_parent' => get_the_ID() ,'order' => 'ASC') );
			if ( $revestimientos->have_posts() ) : while ( $revestimientos->have_posts() ) : $revestimientos->the_post(); ?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="box-image top-margin">
						<? the_post_thumbnail( 'revestimientos', array('class' => 'img-responsive center-block') ); ?>
						<div class="hover">
							<h3 class="hover-box-title text-center"><? the_title(); ?></h3>
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