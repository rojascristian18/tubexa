</div><!-- End div.page -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-5">
				<?
					$image = get_site_config('logo');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive logo-footer" />

				<?	endif; ?>
			</div>
			<div class="col-5">
				<label class="footer-title">Planta Industrial</label><br/>
				<? echo get_site_config('direccion_planta_industrial'); ?><br/>
				<a href="tel:+56<?= get_site_config('codigo_de_area') . get_site_config('fono_contacto'); ?>" class="tel-footer">
					Teléfono: (+56) <?= get_site_config('codigo_de_area') . " " . get_site_config('fono_contacto'); ?> 
				</a>
			</div>
			<div class="col-5">
				<label class="footer-title">Oficina comercial</label><br/>
				<? echo get_site_config('direccion_oficina_comercial'); ?><br/>
				<a href="tel:+56<?= get_site_config('codigo_de_area') . get_site_config('fono_contacto'); ?>" class="tel-footer">
					Teléfono: (+56) <?= get_site_config('codigo_de_area') . " " . get_site_config('fono_contacto'); ?> 
				</a>
				<div class="sep-chico"></div>
				<label class="footer-title no-border">SUCURSALES</label><br/>
				<a class="btn btn-footer" href="<? bloginfo('url'); ?>/contacto">B</a>
			</div>
			<div class="col-5">
				<label class="footer-title no-border">Contacto</label><br/>
				<a class="btn btn-footer" href="<? bloginfo('url'); ?>/contacto">B</a>
			</div>
			<div class="col-5">
				imagenes
			</div>
		</div>
	</div>
</footer>
<? wp_footer();?>
</body>
</html>