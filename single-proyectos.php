<?php 

get_header(); ?>

<main role="main" class="main">
	<div id="scroller">
		<!-- section -->
		<div class="loading">
			<div class="bubblingG">
				<span id="bubblingG_1"></span>
				<span id="bubblingG_2"></span>
				<span id="bubblingG_3"></span>
			</div>
			<div class="clearfix"></div>
		</div>
		<section id="contenidoPrincipal">
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section class="seccionTextoTrabajo">
						<div class="container contenedorTextoTrabajo">
							<div class="col-xs-12 col-md-6">
								<img class="imagenInterna" src="<?php the_field('primera_imagen'); ?>" />
							</div>
							<div class="col-xs-12 col-md-6 textoItalico">
								<div class="titulodeSeccion col-xs-12 text-center">
									<?php the_field('titulo_de_primera_imagen')?>
								</div>
								<div class="textoDescripcion">
									<?php the_field('descripcion_de_primera_imagen')?>
								</div>
							</div>
						</div>
					</section>
					<div class="clearfix"></div>
					<!-- data-stellar-vertical-offset="<?php the_field('ajuste_vertical')?>" data-speed="<?php the_field('velocidad_parallax')?>" data-type="background" data-vofset="<?php the_field('ajuste_vertical')?>" -->
					<section class="parallax" data-stellar-offset-parent="true">
						<div  class="contenedorParallax" style="background-image: url('<?php the_field('imagen_parallax')?>');" data-stellar-background-ratio="0.5">
							<div class="container" >
								<div class="wraptextoParallax visible-md visible-lg textoItalico col-xs-6 <?php the_field('direccion_parallax')?> " data-stellar-ratio="1" style="color:<?php the_field('color_texto_parallax'); ?>" >
									<div class="tituloParallax"><?php the_field('titulo_de_parallax')?></div>
									<p><?php the_field('texto_parallax')?></p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</section>
					<div class="clearfix"></div>
					<section class="seccionTextoTrabajo">
						<div class="container contenedorTextoTrabajo">
							<div class="col-xs-12 col-md-6">
								<img class="imagenInterna" src="<?php the_field('segunda_imagen'); ?>" />
							</div>
							<div class="col-xs-12 col-md-6 textoItalico">
								<div class="titulodeSeccion col-xs-12 text-center">
									<?php the_field('titulo_de_segunda_imagen')?>
								</div>
								<div class="textoDescripcion">
									<?php the_field('descripcion_de_segunda_imagen')?>
								</div>
							</div>
						</div>
					</section>
					<div class="clearfix"></div>
					<?php if( get_field('ampliar_informacion') ):?>
						<!-- data-stellar-vertical-offset="<?php the_field('ajuste_vertical')?>" -->
						<section class="parallax" data-stellar-offset-parent="true">
							<div class="contenedorParallax" style="background-image: url('<?php the_field('imagen_parallax2')?>');" data-stellar-background-ratio="0.5">
								<div class="container">
									<div class="wraptextoParallax visible-md visible-lg textoItalico col-xs-6 text-left <?php the_field('direccion_parallax_2')?> " data-stellar-ratio="1" style="color:<?php the_field('color_texto_parallax_2'); ?>" >
										<div class="tituloParallax"><?php the_field('titulo_parallax_2')?></div>
										<p><?php the_field('texto_parallax_2')?></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</section>
						<div class="clearfix"></div>
						<section class="seccionTextoTrabajo">
							<div class="container contenedorTextoTrabajo">
								<div class="col-xs-12 col-md-6">
									<?php if (get_field('tercera_imagen')):?><img class="imagenInterna" src="<?php the_field('tercera_imagen'); ?>" /><?endif?>
								</div>
								<div class="col-xs-12 col-md-6 textoItalico">
									<div class="titulodeSeccion col-xs-12 text-center">
										<?php the_field('titulo_de_tercera_imagen')?>
									</div>
									<div class="textoDescripcion">
										<?php the_field('descripcion_de_tercera_imagen')?>
									</div>
								</div>
							</div>
						</section>
					<?php endif;?>
				</article>
				<!-- /article -->
<?php endif;?>
			<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</div>
</main>


<?php get_footer(); ?>
