<?php
/*
=====================
	ACF functions
=====================
*/


/*
=====================
	ACF options page
=====================
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(

	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'menu_slug' 	=> 'theme-general-settings_top',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'theme-general-settings_bottom',
	));	
}


/*
=====================
	ACF Flexible Template Loop
=====================
*/
function the_acf_loop(){
  	get_template_part('template-parts/loop/acf-blocks','loop');
}