<?php
function equipoDeTrabajo( $atts ) {
	extract( shortcode_atts(
	        array(
	              'cantidad' => 4,
	              'Titulo'=>'Equipo De Trabajo',
	              ), $atts )
	);
	$args = array(
	              'post_type'   => 'quienessomos',
	              'post_status' => 'publish',
	              'order'               => 'DESC',
	              'orderby'             => 'id',
	              'ignore_sticky_posts' => false,
	              'posts_per_page'         => $cantidad,
	              );
	$respuesta='<div class="equipoDeTrabajo"><div class="tituloDeSeccionInterno col-xs-12 text-center">'.$Titulo.'</div>';
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$respuesta.='<div class="col-xs-12 col-sm-6 col-md-4 text-center">';
			$respuesta.=get_the_post_thumbnail(get_the_ID(), 'imagenNosotros');
			$respuesta.='<div class="tituloQSI col-xs-12 text-center">'.get_the_title().'</div>';
			$respuesta.='<div class="puestoQSI col-xs-12 text-center">'.get_field('cargo').'</div>';
			$redesSociales=get_field('twitter').get_field('facebook').get_field('instagram').get_field('behance').get_field('pinterest').get_field('google+');
			if(strlen($redesSociales)>0){
				$respuesta.='<div class="centered-pills"><ul class="nav nav-pills">';
				if(strlen(get_field('twitter'))>0){
					$respuesta.='<li><a href="'.get_field('twitter').'"><div class="iconosRedesSociales fa fa-twitter"></div></a></li>';
				}
				if(strlen(get_field('facebook'))>0){
					$respuesta.='<li><a href="'.get_field('facebook').'"><div class="iconosRedesSociales fa fa-facebook"></div></a></li>';
				}
				if(strlen(get_field('instagram'))>0){
					$respuesta.='<li><a href="'.get_field('instagram').'"><div class="iconosRedesSociales fa fa-instagram"></div></a></li>';
				}
				if(strlen(get_field('behance'))>0){
					$respuesta.='<li><a href="'.get_field('behance').'"><div class="iconosRedesSociales fa fa-facebook"></div></a></li>';
				}
				if(strlen(get_field('pinterest'))>0){
					$respuesta.='<li><a href="'.get_field('pinterest').'"><div class="iconosRedesSociales fa fa-pinterest"></div></a></li>';
				}
				if(strlen(get_field('googleplus'))>0){
					$respuesta.='<li><a href="'.get_field('googleplus').'"><div class="iconosRedesSociales fa fa-google-plus"></div></a></li>';
				}
				$respuesta.="</div>";
			}
			$respuesta.='<div class="clearfix"></div></div>';
		}
	} else {
		$respuesta="No Hay que Haceres";
	}
	wp_reset_postdata();
	$respuesta.='<div class="clearfix"></div></div>';
	return do_shortcode($respuesta);

}
add_shortcode('equipoDeTrabajo','equipoDeTrabajo' );
?>