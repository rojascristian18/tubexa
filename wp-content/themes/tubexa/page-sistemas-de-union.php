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
	<div class="sep-normal"></div>
	<? get_template_part('partials/sistemas-de-union'); ?>
	<? endwhile; ?>
	<? endif; ?>
<? get_footer(); ?>

