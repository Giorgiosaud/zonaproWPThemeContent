<?php
function zonaproCss(){
         // Verificar si esta en la pantalla admin o login
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_register_style( 'zonaproCustom', get_template_directory_uri(). '/includes/customCss/zonapro.css', array('bootstraptheme'), '3.1.1' );
		wp_enqueue_style('zonaproCustom');
	}
}
add_action('init', 'zonaproCss'); 
?>