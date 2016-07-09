<? get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="body-title top-margin">Principales proyectos ejecutados (<? single_cat_title(); ?>)</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 archive-proyectos">
			<div class="row">
		<?	
			$categorias = get_categories( array('taxonomy' => 'cat_proyectos', 'hide_empty'   => 0) );
			
			foreach ( $categorias as $categoria ) { ?>
			    <div class="col-5 text-center top-margin"><img src="<?=get_template_directory_uri(); ?>/public/img/line.png" class="list-red"><? echo $categoria->name; ?><a href="<?=get_category_link( $categoria->term_id ); ?>" class="btn-proyecto">Ver</a></div> 
				<?
			}
		?>
			</div>
		</div>
	</div>
</div>
<div class="sep-grande"></div>
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table proyectos-tabla table-bordered">
						<th><center>Cliente</center></th>
						<th><center>Proyecto</center></th>
						<th><center>Revestimiento Interior</center></th>
						<th><center>Revestimiento Exterior</center></th>
				<?
				/**
				* Reordenar Post
				*/
				global $query_string;
				query_posts( $query_string . '&order=ASC' ); 

				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<tr class="text-left">
							<td><b><? the_field('cliente'); ?></b></td>
							<td><? the_field('proyecto'); ?></td>
							<td><? the_field('revestimiento_interior'); ?></td>
							<td><? the_field('revestimiento_exterior'); ?></td>
						</tr>
				<? endwhile; ?>
				<? endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>


<? get_footer(); ?>