<?php
function definir_clase_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
	        array(
	              'class' => '',
	              ), $atts )
	);
	return '<div class="' . esc_attr($class) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'definir_clase', 'definir_clase_shortcode' );
?>