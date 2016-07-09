<div id="wraper-form">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-8 col-lg-4 col-md-offset-8 col-md-4 col-sm-offset-8 col-sm-4 col-xs-12">
				<div class="form-container pull-right">
					<div class="form-head">
						<a href="tel:+56<?= get_site_config('codigo_de_area') . get_site_config('fono_contacto'); ?>" class="tel-form">
							(+56) <?= get_site_config('codigo_de_area') . " " . get_site_config('fono_contacto'); ?> 
						</a>
						<h4 class="title-form">COTIZA AHORA</h4>
					</div>
					<div class="row">
						<? echo do_shortcode('[contact-form-7 id="196" title="Formulario de cotización"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

