<?php 
function section_fluid_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
	        array(
	              'class' => 'seccionInicio',
	              ), $atts )
	);
	$resultado='<section class="' . esc_attr($class) . '"><div class="container-fluid">' . do_shortcode($content) . '</div></section>';
	return $resultado;
}
add_shortcode( 'section_fluid', 'section_fluid_shortcode' );
?>