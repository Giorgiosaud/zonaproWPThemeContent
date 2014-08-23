<?php
function big_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
	        array(
	              'class' => '',
	              ), $atts )
	);
	return '<div class="textoGrande ' . esc_attr($class) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'grande', 'big_shortcode' )

?>