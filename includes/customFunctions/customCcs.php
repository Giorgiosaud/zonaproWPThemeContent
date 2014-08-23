<?php
function zonaproCustomCss(){
         // Verificar si esta en la pantalla admin o login
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_register_style( 'zonaproCustom', get_template_directory_uri(). '/includes/customCss/zonapro.css', array('bootstraptheme'), '3.1.1' );
		wp_enqueue_style('zonaproCustom');
		wp_register_style('FontAwsome','http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',array(),'4.0.3');
		wp_enqueue_style('FontAwsome');
	}
}
add_action('init', 'zonaproCustomCss'); 
?>