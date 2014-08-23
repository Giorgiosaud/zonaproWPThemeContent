<?php
function mostrar_que_hacemos( $atts ) {
	extract( shortcode_atts(
	        array(
	              'cantidad' => 4,
	              'Titulo'=>'¿Que Hacemos?',
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
	$respuesta='<div class="queHacemos"><div class="tituloDeSeccionInterno col-xs-12 text-center">'.$Titulo.'</div>';
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$respuesta.='<div class="contenedorQueHacer col-xs-12 col-sm-6 col-md-3"><div class="queHacer">';
			$respuesta.='<div class="tituloQueHacer col-xs-12 text-center">'.get_the_title().'</div>';
			$respuesta.='<div class="imagenQueHacer text-center">'.get_the_post_thumbnail(get_the_ID(), 'iconos-inicio').'</div>';
			$respuesta.='</div></div>';
		}
	} else {
		$respuesta="No Hay que Haceres";
	}
	wp_reset_postdata();
	$respuesta.='</div>';
	return do_shortcode($respuesta);

}
add_shortcode('queHacemos','mostrar_que_hacemos' );
?>