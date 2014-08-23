<?php
function mostrar_autor(){
	return do_shortcode(get_field('autor_del_mensaje'));
}
add_shortcode( 'mostrarAutor', 'mostrar_autor' );
?>