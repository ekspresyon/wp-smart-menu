<?php

function add_sm_link(){
	add_menu_page('Custom Menu', 'Custom Menu', 'manage_options', 'sm-admin', 'sm_admin_page', 'dashicons-menu'
 ,1);
}
add_action('admin_menu', 'add_sm_link');

function sm_admin_page(){
	//include code for page here
	require_once(SM_SET_DIR.'/inc/sm_admin_template.php');
}