<?
function my_mce_buttons_3($buttons) {	
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'sup';
	$buttons[] = 'sub';
	$buttons[] = 'copy';
	$buttons[] = 'image';
	$buttons[] = 'cleanup';
	$buttons[] = 'removeformat';
	$buttons[] = 'formatselect';
	$buttons[] = 'fontselect';

	return $buttons;
}
function my_mce_buttons_4($buttons) {	
	/**
	 * Add in a core button that's disabled by default
	 */

	$buttons[] = 'styleselect';
	$buttons[] = 'forecolor';
	$buttons[] = 'backcolor';
	$buttons[] = 'forecolorpicker';
	$buttons[] = 'backcolorpicker';
	$buttons[] = 'charmap';
	$buttons[] = 'visualaid';
	$buttons[] = 'anchor';
	$buttons[] = 'newdocument';
	$buttons[] = 'blockquote';
	$buttons[] = 'separator';


	return $buttons;
}
function pensamiento(){

}
add_filter('mce_buttons_3', 'my_mce_buttons_3');
add_filter('mce_buttons_3', 'my_mce_buttons_4');
function items_cambiables_blank($wp_customize){
    
}
add_action( 'customize_register', 'items_cambiables_blank' );
?>