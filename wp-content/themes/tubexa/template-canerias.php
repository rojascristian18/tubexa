<? 
/* Template Name: Plantilla Cañerías con tablas */ 
get_header(); ?>
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
	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>