<?php 
function section_parallax_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
	        array(
	              'class' => 'parallax',
	              'url'=>'none',
	              'velocidad'=>'none',
	              'offsetVertical'=>'800',
	              'texto'=>'Texto Parallax',
	              'claseTexto'=>''
	              ), $atts )
	);
	$resultado='<section class='. esc_attr($class) .' " data-stellar-background-ratio="'.$velocidad.'"  data-stellar-vertical-offset="'.$offsetVertical.'" style="background-image:url('.$url.');"><div  class="textoParallax '.$claseTexto.'">'.$texto.'</div></section>';
	return $resultado;
}
add_shortcode( 'section_parallax', 'section_parallax_shortcode' );
?>