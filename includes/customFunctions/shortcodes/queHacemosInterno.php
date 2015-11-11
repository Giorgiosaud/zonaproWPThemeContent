<?php
function mostrar_que_hacemos_interno( $atts ) {
	extract( shortcode_atts(
	        array(
	              'cantidad' => 4,
	              'Titulo'=>'{:es}TE OFRECEMOS{:}{:en}WE OFFER YOU{:}',
	              ), $atts )
	);
	$args = array(
	              'post_type'   => 'quehacemos',
	              'post_status' => 'any',
	              'order'               => 'DESC',
	              'orderby'             => 'id',
	              'ignore_sticky_posts' => false,
	              'posts_per_page'         => $cantidad,
	              );
	$respuesta='<div class="queHacemosInterno"><div class="tituloDeSeccionInterno col-xs-12 text-center">'.apply_filters('the_content',$Titulo).'</div>';
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$respuesta.='<div class="contenedorQueHacerInterno col-xs-12 col-sm-6 col-md-3"><div class="queHacer">';
			$image = get_field('que_hacemos_interno');
			$size = 'full';
			if( $image ) {
				$respuesta.='<div class="imagenQueHacer text-center">'.wp_get_attachment_image( $image, $size ).'</div></div>';
			}
			$respuesta.='<div class="tituloQueHacerInterno col-xs-12 text-center">'.get_the_title().'</div>';
			$respuesta.='<div class="textoQueHacerInterno text-center">'.apply_filters('the_content',get_the_content()).'</div>';
			$respuesta.='</div>';
		}
	} else {
		$respuesta="No Hay que Haceres";
	}
	wp_reset_postdata();
	$respuesta.='</div>';
	return do_shortcode($respuesta);

}
add_shortcode('queHacemosInterno','mostrar_que_hacemos_interno' );
?>
