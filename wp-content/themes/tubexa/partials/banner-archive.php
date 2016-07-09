<div class="banner-interna">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
			<? 	$image = get_field('imagen_del_banner'); 

				if (!empty($image)) { ?>
					<img src="<?=$image['sizes']['banner-internas']; ?>" class="hide bg-banner" alt="<?=$image['alt']; ?>">
			<? 	}  ?>
				<div class="banner-title">
					<h2>Proyectos</h2>
					<div class="red-line"></div>
				</div>
			</div>
		</div>
	</div>
</div>