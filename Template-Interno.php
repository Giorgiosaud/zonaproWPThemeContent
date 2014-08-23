<?php 
/*
Template Name: Paginas Internas
 */ 	
get_header(); ?>

<main role="main" class="main">
	<!-- section -->
	<div class="loading">
		<div class="bubblingG">
			<span id="bubblingG_1"></span>
			<span id="bubblingG_2"></span>
			<span id="bubblingG_3"></span>
		</div>
	</div>
	<div class="container-fluid text-center loading hidden">Cargando</div>
	<section id="contenidoPrincipal">


		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class=""><div class="tituloDeSeccion col-xs-12 text-center"> <?php the_title( );?></div><div class="clearfix"></div></section>
				<section class="seccionNosotros Dark container-fluid">
					<div class="container">
						<div class="tituloDeSeccionInterno text-center container">
							<?php echo do_shortcode(get_field('titulo_interno' ));?>
						</div>
						<div class="contenidoInterno text-center container">
							<?php echo do_shortcode(get_field('contenido_interno' ));?>
						</div>
					</div>
				</section>
				<?php the_content(); ?>
				<?php edit_post_link(); ?>
				

			</article>
			<!-- /article -->

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
</main>


<?php get_footer(); ?>
