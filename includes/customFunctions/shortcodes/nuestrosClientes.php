<?php
function nuestros_clientes( $atts ) {
	extract( shortcode_atts(
	        array(
	              'cantidad' => 9,
	              'Titulo'=>'Proyectos Recientes',
	              ), $atts )
	);
	$args = array(
	              'post_type'   => 'proyectos',
	              'post_status' => 'publish',
	              'order'               => 'ASC',
	              'orderby'             => 'id',
	              'ignore_sticky_posts' => false,
	              'posts_per_page'         => $cantidad,
	              'meta_query' => array(
	                                    array(
	                                          'key' => 'trabajos_realizados',
	                                          'value' => 'si',
	                                          'compare' => '='
	                                          ),
	                                    )
	              
	              );
	$respuesta='<div class="proyectosRecientes"><div class="tituloDeSeccionInterno col-xs-12 text-center">'.$Titulo.'</div><ul id="da-thumbs" class="da-thumbs">';
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$out=array();
			$terms = get_the_terms(get_the_id(), 'rubros');
			if ($terms) {
				foreach ($terms as $term) {
					$out[] = $term->name;
					}
				$rubros=join( ' + ', $out );
			}
			$image = get_field('icono_representativo');
			$size = 'full';
			$respuesta.='<li>';
			$respuesta.='<a class="linksProyectos" href="'.get_permalink().'">';
			$respuesta.=wp_get_attachment_image( $image, $size );
			$respuesta.='<div><span class="nombre text-center">'.get_the_title().'</span><span class="rubros text-center">'.$rubros.'</span></div></a></li>';
		}
	} else {
		$respuesta="No Hay Proyectos para la Pantalla Inicial";
	}
	wp_reset_postdata();
	$respuesta.='<div class="clearfix"></div></ul>';//
	return do_shortcode($respuesta);

}
add_shortcode('nuestrosClientes','nuestros_clientes' );
?>