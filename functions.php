<?php


//call custom css
function sm_admin_css($smSetup) {
	if ($smSetup != 'toplevel_page_sm-admin') {
        return;
    }
	
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    // wp_enqueue_style( 'sm-admin-bsrtp', plugins_url('inc/smartmenus/addons/bootstrap-4/jquery.smartmenus.bootstrap-4.css', __FILE__));
    wp_enqueue_style( 'sm-core-css', plugins_url('inc/smartmenus/css/sm-core-css.css', __FILE__));
    wp_enqueue_style( 'sm-clean-css', plugins_url('inc/smartmenus/css/sm-clean/sm-clean.css', __FILE__));
    wp_enqueue_style( 'sm_admin', plugins_url('assets/css/sm_admin.css', __FILE__));


    //enqueue scripts
    //wp_enqueue_script( 'jqry-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', false, true);
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, true);
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false, true);
    wp_enqueue_script( 'sm-jqry-js', plugins_url('inc/smartmenus/jquery.smartmenus.min.js', __FILE__), false, true );
    wp_enqueue_script( 'sm-clean-js', plugins_url('inc/smartmenus/js/sm-clean.js', __FILE__),false , true );

}
add_action( 'admin_enqueue_scripts', 'sm_admin_css' );

//call in custom menu
require SM_SET_DIR.'/inc/admin_menu_lnk.php';

