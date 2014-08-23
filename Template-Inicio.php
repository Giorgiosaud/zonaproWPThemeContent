<?php 
/*
Template Name: Pagina de Inicio
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
		<div class="clearfix"></div>
	</div>
		<section id="contenidoPrincipal">


			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<?php the_content(); ?>
					<?php //edit_post_link(); ?>

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
