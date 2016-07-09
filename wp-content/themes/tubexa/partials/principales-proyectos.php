<div class="spec-container bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="body-title">PRINCIPALES PROYECTOS EJECUTADOS</h2>
				<span class="title-line"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
				<div class="contenedor-proyectos">
					<ul class="proyects-list">
				<?	
					$categorias = get_categories( array('taxonomy' => 'cat_proyectos', 'hide_empty'   => 0) );
					$count = 1;
					foreach ( $categorias as $categoria ) { ?>
					    <li><? echo $categoria->name; ?><a href="<?=get_category_link( $categoria->term_id ); ?>" class="btn-proyecto">Ver</a></li> 
						<?
						if ( $count%7 == 0) {
						//Cerrarmos lista y abrimos una nueva ?>
						</ul>
						<ul class="proyects-list">
						<?	}
					 $count++;
					}
				?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>