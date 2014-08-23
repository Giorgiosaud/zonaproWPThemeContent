<?php 
function section_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
	        array(
	              'class' => 'seccionInicio',
	              ), $atts )
	);
	$resultado='<section class="' . esc_attr($class) . '"><div class="container">' . do_shortcode($content) . '</div></section>';
	return $resultado;
}
add_shortcode( 'section', 'section_shortcode' );
?>