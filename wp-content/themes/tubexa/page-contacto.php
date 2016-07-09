<? get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="body-title top-margin">Formulario de Contacto</h2>
					<div class="contact-form" id="contact-form">
						<? echo do_shortcode('[contact-form-7 id="306" title="Formulario de contacto"]'); ?>
					
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="body-title top-margin">Contacto General</h2>
					<label>E-mail: </label> <?= get_site_config('email_contacto'); ?>
					<div class="sep-chico"></div>
					<label class="footer-title">Planta Industrial</label><br/>
					<? echo get_site_config('direccion_planta_industrial'); ?><br/>
					<a href="tel:+56<?= get_site_config('codigo_de_area') . get_site_config('fono_contacto'); ?>" class="tel-footer">
						<b>Teléfono:</b> (+56) <?= get_site_config('codigo_de_area') . " " . get_site_config('fono_contacto'); ?> 
					</a>
					<div class="sep-chico"></div>
					<label class="footer-title">Oficina comercial</label><br/>
					<? echo get_site_config('direccion_oficina_comercial'); ?><br/>
					<a href="tel:+56<?= get_site_config('codigo_de_area') . get_site_config('fono_contacto'); ?>" class="tel-footer">
						<b>Teléfono:</b> (+56) <?= get_site_config('codigo_de_area') . " " . get_site_config('fono_contacto'); ?> 
					</a>
				</div>
			</div>
		</div>
	<? endwhile; ?>
	<? endif; ?>

	<? get_template_part('partials/encargados');?>

	<? get_template_part('partials/sucursales');?>

<? get_footer(); ?>