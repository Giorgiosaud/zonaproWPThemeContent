<?php
function mostrar_pensamientos( $atts ) {
	extract( shortcode_atts(
	        array(
	              'cantidad' => 1,
	              ), $atts )
	);
	$args = array(
	              'post_type'   => 'pensamientos',
	              'post_status' => 'any',
	              'order'               => 'DESC',
	              'orderby'             => 'id',
	              'ignore_sticky_posts' => false,
	              'posts_per_page'         => $cantidad,
	              );
	$respuesta='<div class="Pensamientos">';
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$respuesta.='<div class="contenedorPensamiento col-xs-12">';
			$respuesta.='<div class="Proyectos">';
			$respuesta.='<div class="contenidoPensamiento col-xs-12 text-center">'.get_the_content().'</div>';
			$respuesta.='</div></div>';
		}
	} else {
		$respuesta="No Hay que Pensamientos";
	}
	wp_reset_postdata();
	$respuesta.='</div>';
	return do_shortcode($respuesta);
}
add_shortcode('pensamiento','mostrar_pensamientos' );
?>