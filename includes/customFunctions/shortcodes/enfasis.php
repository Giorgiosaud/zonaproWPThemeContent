<?php
function em_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
	        array(
	              'class' => '',
	              ), $atts )
	);
	return '<div class="textoItalico '. esc_attr($class) . ' ">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'enfasis', 'em_shortcode' );
?>