<?php
function mostrar_mensajes_inicio( $atts ) {
	extract( shortcode_atts(
	        array(
	              'cantidad' => 3,
	              ), $atts )
	);
	$args = array(
	              'post_type'   => 'mensajeinicio',
	              'post_status' => 'any',
	              'order'               => 'DESC',
	              'orderby'             => 'rand',
	              'ignore_sticky_posts' => false,
	              'posts_per_page'         => $cantidad,
	              );
	$respuesta='<div id="cbp-qtrotator" class="cbp-qtrotator">';
	$query = new WP_Query( $args );

	if ( $query->have_posts() ):
		while ( $query->have_posts() ):
			$query->the_post();
			$respuesta.='<div class="cbp-qtcontent"><blockquote><p>'.get_the_title().' '.get_field('subtitulo_del_mensaje').'</p>';
			$respuesta.='<footer>'.get_field('autor_del_mensaje').'</footer></blockquote></div>';
			// $respuesta.='<div class="textoGrande col-xs-12 text-center">'.get_the_title().'</div>';
			// $respuesta.='<div class="textoItalico col-xs-12 text-center ">'.get_field('subtitulo_del_mensaje').'</div>';
			// $respuesta.='<div class="textoItalico col-xs-12 text-right Autor ">'.get_field('autor_del_mensaje').'</div>';
		endwhile;
		else:
			$respuesta="No Hay Pensamientos";
		endif;
			$respuesta.='</div>';
			wp_reset_postdata();
		return do_shortcode($respuesta);

	}
	add_shortcode( 'mostrarMensajes', 'mostrar_mensajes_inicio' );
	?>