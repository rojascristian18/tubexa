<div class="sep-normal"></div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-xs-12 bg-gray no-pad parent-height">
			<div class="contenedor-clientes">
		<?	
			$archivos = new WP_Query( array('post_type' => 'cliente', 'posts_per_page' => -1, 'order' => 'ASC') );

			if ( $archivos->have_posts() ) { ?>
				<ul class="clients-list">
			<?	for ( $i = 1; wp_count_posts('cliente')->publish >= $i; $i++ ) {
					$archivos->the_post(); ?> 

					<li><? the_title(); ?></li> 

					<?
					if ($i%11 == 0) {
					//Cerrarmos lista y abrimos una nueva ?>
				</ul>
				<ul class="clients-list">
				<?	}
				} ?>
				</ul>
		<?	}
			/* Restore original Post Data */
			wp_reset_postdata();
		?>
			</div>
		</div>
		<div class="col-md-6 col-xs-12 no-pad">
			<div class="contenedor-clientes-image">
				<img src="<? echo get_template_directory_uri();?>/public/img/internas/imagen7.png" class="img-responsive">
				<div class="hover-container">
					<h3 class="hover-title">PRINCIPALES CLIENTES</h3>
					<div class="red-line"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sep-normal"></div>
